<?php

use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\Golongan;
use App\Models\UnitKerja;

function golongan()
{
    return Golongan::get();
}
function pegawai()
{
    return Pegawai::get();
}

function jabatan()
{
    return Jabatan::get();
}

function unitkerja()
{
    return UnitKerja::get();
}
