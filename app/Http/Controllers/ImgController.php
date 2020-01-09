<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Img;

class ImgController extends Controller
{
    public function index()
    {
    	$images = Img::all();
    	return view('history', compact('images'));
    }
}
