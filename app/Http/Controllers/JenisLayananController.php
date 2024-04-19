<?php

namespace App\Http\Controllers;

use App\Models\JenisLayanan;
use Illuminate\Http\Request;

class JenisLayananController extends Controller
{
    public function index(){

        $jenis_layanan = JenisLayanan::all();

        return view('jenis-layanan.index', compact('jenis_layanan'));
    }
}
