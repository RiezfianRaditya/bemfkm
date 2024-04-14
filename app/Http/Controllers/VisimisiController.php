<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'master-data',
            'subtitle' => 'visi-misi',
            'visimisi' => Visimisi::all(),
        ];

        return view('backend.pages.visi-misi.index', $data);
    }
}
