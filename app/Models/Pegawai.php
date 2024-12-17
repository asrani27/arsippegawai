<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $guarded = ['id'];

    public function unitkerja()
    {
        return $this->belongsTo(UnitKerja::class, 'unit_kerja_id');
    }
    public function pendidikan()
    {
        return $this->hasMany(Pendidikan::class, 'pegawai_id');
    }
}
