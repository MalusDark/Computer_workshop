<?php

namespace App\Http\Controllers;

use App\Models\servicesList;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function returnCount($min, $max, $name, $car)
    {
        return view('main.cards');
    }
}
