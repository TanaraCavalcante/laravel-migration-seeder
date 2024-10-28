<?php

namespace App\Http\Controllers;

use App\Models\Treno;
use Illuminate\Http\Request;

class TrenoController extends Controller
{
    public function index(){
        $treni = Treno::all();
        return view ("trains.index", compact("treni"));
    }
}