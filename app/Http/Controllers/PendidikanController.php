<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PendidikanController extends Controller
{

    public function index()
    {
        $data = Pegawai::paginate(10);
        return view('admin.pendidikan.index', compact('data'));
    }
    public function create()
    {
        return view('admin.pendidikan.create');
    }

    public function delete($id)
    {
        $data = Pendidikan::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = Pendidikan::find($id);

        return view('admin.pendidikan.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        Pendidikan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/pendidikan');
    }

    public function store(Request $req)
    {
        Pendidikan::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/pendidikan');
    }
}
