<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() {
        return view('index');
    }

    public function qna() {
        $hari = 'Minggu';
        $materi = 'Laravel';
        return view('qna', compact('hari', 'materi'));
    }
}
