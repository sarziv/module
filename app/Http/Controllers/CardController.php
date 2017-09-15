<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index ()
    {
        $cards = DB::table('cardfaker')->get();
        return view('welcome', compact('cards'));
    }
}
