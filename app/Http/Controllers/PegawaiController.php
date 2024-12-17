<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{

    public function index()
    {
        $data = Pegawai::paginate(10);
        return view('admin.pegawai.index', compact('data'));
    }
    public function create()
    {
        return view('admin.pegawai.create');
    }

    public function delete($id)
    {
        $data = Pegawai::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = Pegawai::find($id);

        return view('admin.pegawai.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        Pegawai::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/pegawai');
    }

    public function store(Request $req)
    {
        Pegawai::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/pegawai');
    }
}
