<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\Menjabat;
use App\Models\Pansus;
use App\Models\Pegawai;
use App\Models\Pengaduan;
use App\Models\Pensiun;
use App\Models\RapatKomisi;
use App\Models\RapatPansus;
use App\Models\Tindakan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{

    public function index()
    {
        return view('admin.laporan.index');
    }

    public function pegawai()
    {
        $data = Pegawai::get();
        $pdf = Pdf::loadView('admin.laporan.pdf_pegawai', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function pdf()
    {
        $bulan = request()->get('bulan');
        $tahun = request()->get('tahun');
        if (request()->get('jenis') == '1') {
            $data = Menjabat::whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->get();
            $pdf = Pdf::loadView('admin.laporan.pdf_menjabat', compact('data', 'bulan', 'tahun'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
        if (request()->get('jenis') == '2') {
            $data = Pensiun::whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->get();
            $pdf = Pdf::loadView('admin.laporan.pdf_pensiun', compact('data', 'bulan', 'tahun'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
    }
}
