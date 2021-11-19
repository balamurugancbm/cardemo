<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
		$cars = Car::all();
        return view('home', [
            'cars' => $cars
        ]);
    }
}
