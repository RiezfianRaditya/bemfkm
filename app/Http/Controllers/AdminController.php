<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'dashboard',
            'subtitle' => '',
            'visimisi' => Visimisi::all(),
        ];
        return view('backend.index', $data);
    }

    public function input(Request $request)
    {
        $isi = $request->isi;
        $jenis = $request->jenis;

        $data_input = [
            'jenis' => $jenis,
            'isi' => $isi,
        ];

        Visimisi::create($data_input);

        $data = [
            'visimisi' => Visimisi::all(),
        ];
        return view('backend.index', $data);
    }
}
