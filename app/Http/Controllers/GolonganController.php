<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GolonganController extends Controller
{

    public function index()
    {
        $data = Golongan::paginate(10);
        return view('admin.golongan.index', compact('data'));
    }
    public function create()
    {
        return view('admin.golongan.create');
    }

    public function delete($id)
    {
        $data = Golongan::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = Golongan::find($id);

        return view('admin.golongan.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        Golongan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/golongan');
    }

    public function store(Request $req)
    {
        Golongan::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/golongan');
    }
}
