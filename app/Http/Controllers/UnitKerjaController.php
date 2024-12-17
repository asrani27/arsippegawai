<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $data = UnitKerja::paginate(10);
        return view('admin.unitkerja.index', compact('data'));
    }
    public function create()
    {
        return view('admin.unitkerja.create');
    }

    public function delete($id)
    {
        $data = UnitKerja::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = UnitKerja::find($id);

        return view('admin.unitkerja.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        UnitKerja::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/unitkerja');
    }

    public function store(Request $req)
    {
        UnitKerja::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/unitkerja');
    }
}
