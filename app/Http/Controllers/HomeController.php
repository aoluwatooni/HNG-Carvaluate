<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Prediction;

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
        return view('home');
    }


    public function sendpredict(Request $request) {

        $this->validate($request, [
            'Kilometers_Driven' => 'required|integer',
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
