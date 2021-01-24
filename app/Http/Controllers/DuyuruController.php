<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuyuruController extends Controller
{
    //

    public function index() {
        return view('duyurular');
    }

    public function show($id) {
        return view('duyuru', ['id' => $id]);
    }
}
