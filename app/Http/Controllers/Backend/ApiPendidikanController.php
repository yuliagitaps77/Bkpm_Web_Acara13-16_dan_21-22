<?php

namespace App\Http\Controllers\Backend;

use App;
use App\Http\Controllers\Controller;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiPendidikanController extends Controller
{
    // Mengambil semua data Pendidikan
    public function getAll()
    {
        $pendidikan = Pendidikan::all();
        return response()->json($pendidikan, 200);
    }

    // Membuat data Pendidikan baru
    public function create(Request $request)
    {
        $pendidikan = Pendidikan::create($request->all());
    
        return response()->json([
            'status' => 'ok',
            'data' => $pendidikan,
            'message' => 'Pendidikan berhasil ditambahkan!'
        ], 201);
    }
    
    public function getPen($id)
    {
        $pendidikan = Pendidikan::find($id);
        return Response::json($pendidikan, 200);
    }

    public function createPen(Request $request)
    {
        Pendidikan::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil ditambahkan!'
        ], 201);
    }

    public function updatePen($id, Request $request)
    {
        Pendidikan::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil dirubah!'
        ], 201);
    }

    public function deletePen($id)
    {
        Pendidikan::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil dihapus!'
        ], 201);
    }
}
