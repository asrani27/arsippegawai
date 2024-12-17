<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JabatanController extends Controller
{
    public function index()
    {
        $data = Jabatan::paginate(10);
        return view('admin.jabatan.index', compact('data'));
    }
    public function create()
    {
        return view('admin.jabatan.create');
    }

    public function delete($id)
    {
        $data = Jabatan::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = Jabatan::find($id);

        return view('admin.jabatan.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        Jabatan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/jabatan');
    }

    public function store(Request $req)
    {
        Jabatan::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/jabatan');
    }
}
