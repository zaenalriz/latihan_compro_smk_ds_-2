<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Sliders;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliders=Sliders::get();
        $services=Services::get();
        return view('home',[
            'sliders'=>$sliders,
            'services'=>$services
        ]);
    }
}
