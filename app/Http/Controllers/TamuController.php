<?php
namespace App\Http\Controllers;


use App\Models\Tamu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TamuController extends Controller
{
    public function create()
    {
        return view('tamu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
        ]);

        Tamu::create($request->all());

        return redirect()->back()->with('success', 'Data tamu berhasil disimpan!');
    }

    public function index()
    {
    $dataTamu = Tamu::all();
    return view('tamu.index', compact('dataTamu'));
    }


}

