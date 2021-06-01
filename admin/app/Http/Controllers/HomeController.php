<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;

class HomeController extends Controller
{
    public function HomeIndex()
    {
        return view('Home');
    }
}
