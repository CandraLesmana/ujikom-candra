<?php

namespace App\Http\Controllers;

use App\Models\JenisLayanan;
use Illuminate\Http\Request;

class JenisLayananController extends Controller
{
    public function index()
    {
        $jenis_layanans = JenisLayanan::all();

        return response()->json([
            'message' => 'Success',
            'data' => $jenis_layanans
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $jenis_layanan = JenisLayanan::create($request->all());
        if (!$jenis_layanan) {
            return response()->json([
                'type' => 'danger',
                'message' => 'Failed to create Jenis Layanan'
            ], 400);
        } else {
            return response()->json([
                'type' => 'success',
                'message' => 'Jenis Layanan created successfully',
                'data' => $jenis_layanan
            ], 201);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        if (!$jenis_layanan = JenisLayanan::find($id)) {
            return response()->json([
                'message' => 'Jenis Layanan not found'
            ], 404);
        }

        $jenis_layanan = JenisLayanan::find($id);
        $jenis_layanan->update($request->all());

        return response()->json([
            'message' => 'Jenis Layanan updated successfully',
            'data' => $jenis_layanan
        ], 200);
    }

    public function destroy($id)
    {
        $jenis_layanan = JenisLayanan::find($id);
        $jenis_layanan->delete();

        return response()->json([
            'type' => 'success',
            'message' => 'Jenis Layanan deleted successfully'
        ], 200);
    }
}
