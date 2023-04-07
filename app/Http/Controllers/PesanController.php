<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ($id)
    {
        $barang = Barang::where('id', $id)->first();

        return view('pesan.index', compact('barang'));
    }
}
