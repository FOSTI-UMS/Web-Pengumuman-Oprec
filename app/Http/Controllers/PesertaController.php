<?php

namespace App\Http\Controllers;

use App\Models\Peserta22;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function search(Request $request)
    {
        $request->validate([
            'nim' => 'required',
        ]);

        $peserta = Peserta22::all();

        foreach ($peserta as $ps) {
            if ($request->nim == $ps->nim) {
                if ($ps->qualified == 1) {
                    return redirect('/pengumuman')->with('qualified',  'diterima')->with(['id' => $ps->id]);
                } else {
                    return redirect('/pengumuman')->with('notQualified',  'diterima')->with(['id' => $ps->id]);
                }
            }
        }

        return redirect('/pengumuman')->with('error',  'data tidak ada');
    }

    public function pengumuman()
    {
        $id = session()->get('id');
        $peserta = Peserta22::Where('id', $id)->first();

        if ($peserta != null) {
            return view('pengumuman', ['peserta' => $peserta]);
        } else {
            return view('pengumuman');
        }
    }
}
