<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Prediction;

use function GuzzleHttp\json_decode;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user_active = Auth::user();

        $predictions = Prediction::all();

        // $predictions = Prediction::where('user_id', '=', $user_active->id)->get();

        // $predictions = $predictions->all();

        // dd($predictions);

        return view('home')->with('predictions', $predictions);
    }


    public function destroy($id)
    {
        $predict = Prediction::where('id', '=', $id)->firstOrFail();

        $predict->delete();

        return  redirect()->route('home');
    }


    public function sendpredict(Request $request) {

        $this->validate($request, [
            'Kilometers_Driven' => 'required|integer',
            'Year' => 'required|integer',
            'FuelType' => 'required',
            'TransmissionType' => 'required',
            'Seats' => 'required'
        ]);

        $response = Http::post('https://carvaluateapi.herokuapp.com/predict', [
            [

                'Kilometers_Driven' => (int)$request->Kilometers_Driven,
                'Year' => (int)$request->Year,
                'FuelType' => (int)$request->FuelType,
                'TransmissionType' => (int)$request->TransmissionType,
                'Seats' => (int)$request->Seats

            ]
        ]);

        $result = json_decode($response->body())->prediction;
        $result = substr($result, 8, 7);

        if($request->FuelType == 0)
        {
            $fuel = "Compressed Natural Gas";
        }
        else if($request->FuelType == 1)
        {
            $fuel = "Diesel";
        }
        else {
            $fuel = "Petrol";
        }

        if($request->TransmissionType == 0)
        {
            $tt = "Manual";
        }
        else {
            $tt = "Automatic";
        }

        $data = [
            'user_id' => Auth::user()->id,
            'model' => $request->Model,
            'year' => $request->Year,
            'fuel' => $fuel,
            'tt' => $tt,
            'seats' => $request->Seats,
            'km' => $request->Kilometers_Driven,
            'price' => $result
        ];

        Prediction::create($data);

        return view('results')->with('result', $result);

    }

}
