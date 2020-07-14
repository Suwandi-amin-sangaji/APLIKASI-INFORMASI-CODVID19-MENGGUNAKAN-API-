<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
	public function index()
	{
	    $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
	    $data = $response->json();
	    // dd($data);
	    return view('index', compact('data'));
	}
}
