<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

class ViewController extends Controller
{
    public function index(){
        $cards = Card::get();
        return view('index', compact('cards'));
    }
}
