<?php

namespace App\Http\Controllers;

use App\Models\CodeKnowlege;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        $codes = CodeKnowlege::where('user_id' , auth()->user()->id)->get();
        return view('dashboard' , compact('codes'));
    }
}
