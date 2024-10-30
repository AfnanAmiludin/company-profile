<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class Sertif extends Controller
{
    public function index(Request $request)
    {
        if($request->nomor){
            $data = Certificate::where('nomor', $request->nomor)->first();
            return view('certificate', compact('data'));
        } else {
            return view('certificate');
        }
        
    }
}
