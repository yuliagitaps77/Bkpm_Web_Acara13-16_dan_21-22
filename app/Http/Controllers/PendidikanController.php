<?php

use Illuminate\Http\Request;
use App\Models\Pendidikan;
use App\Http\Controllers\Controller;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::get();
        return view('backend.pendidikan.index', compact('pendidikan'));
    }

    public function create()
    {
        $pendidikan = null;
        return view('backend.pendidikan.create', compact('pendidikan'));
    }
}
