<?php

namespace App\Http\Controllers;

use App\Models\Pensiun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PensiunController extends Controller
{
    public function index()
    {
        $data = Pensiun::paginate(10);
        return view('admin.pensiun.index', compact('data'));
    }
    public function create()
    {
        return view('admin.pensiun.create');
    }

    public function delete($id)
    {
        $data = Pensiun::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = Pensiun::find($id);

        return view('admin.pensiun.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        Pensiun::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/pensiun');
    }

    public function store(Request $req)
    {
        Pensiun::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/pensiun');
    }
}
