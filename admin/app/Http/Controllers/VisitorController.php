<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;

class VisitorController extends Controller
{
    public function VisitorIndex()
    {
    	// $VisitorData =  VisitorModel::all();
    	$VisitorData =  json_decode(VisitorModel::orderBy('id','desc')->take(500)->get());
        return view('Visitor',['VisitorData' => $VisitorData]);
    }
}
