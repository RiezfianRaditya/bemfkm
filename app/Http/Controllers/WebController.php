<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $data = [
            // 'visimisi' => Visimisi::all(),
        ];
        return view('frontend.index', $data);
    }
}
