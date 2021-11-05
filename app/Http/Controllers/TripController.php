<?php

namespace App\Http\Controllers;
use App\Model\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index(){
        
        $trips = Trip::all();
        $data=[
            'trips' => $trips
        ];

        return view('trips', $data);
    }
}
