<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        return view('results')->with('result', $result);

    }

}
