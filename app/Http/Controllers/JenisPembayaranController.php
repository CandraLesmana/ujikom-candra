<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisPembayaranController extends Controller
{
    public function index(){
        return view('jenis-pembayaran.index');
    }
}
