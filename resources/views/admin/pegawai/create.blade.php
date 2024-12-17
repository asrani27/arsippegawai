@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row column_title">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Tambah Data</h2>
       </div>
    </div>
  </div>
  <div class="white_shd full margin_bottom_30">
    <div class="padding_infor_info">
        <form method="post" action="/superadmin/pegawai/create">
            @csrf
        <fieldset>
            
            <div class="field">
               <label class="label_field">NIP pegawai</label>
               <input type="text" class="form-control" name="nip">
            </div>
            <br/>
            <div class="field">
               <label class="label_field">Nama Lengkap pegawai</label>
               <input type="text" class="form-control" name="nama">
            </div>
            <br/>
            <div class="field">
               <label class="label_field">alamat</label>
               <input type="text" class="form-control" name="alamat">
            </div>
            <br/>
           <div class="field">
              <label class="label_field">Telp</label>
              <input type="text" class="form-control" name="telp">
           </div>
           <br/>
           <div class="field">
              <label class="label_field">Tempat Lahir</label>
              <input type="text" class="form-control" name="tempat_lahir">
           </div>
           <br/>
           <div class="field">
              <label class="label_field">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tanggal_lahir">
           </div>
           <br/>
           <div class="field">
              <label class="label_field">Jenis Kelamin</label>
              <select name="jkel" class="form-control" required>
               <option value="">-</option>
               <option value="L">Laki-Laki</option> 
               <option value="P">Perempuan</option> 
              </select>
           </div>
           <br/>
           <div class="field">
              <label class="label_field">Agama</label>
              <select name="agama" class="form-control" required>
               <option value="">-</option>
               <option value="ISLAM">ISLAM</option> 
               <option value="KRISTEN">KRISTEN</option> 
               <option value="HINDU">HINDU</option> 
               <option value="BUDDHA">BUDDHA</option> 
              </select>
           </div>
           <br/>
           <div class="field">
              <label class="label_field">Status Pegawai</label>
              <select name="status_pegawai" class="form-control" required>
               <option value="">-</option>
               <option value="CPNS">CPNS</option> 
               <option value="PNS">PNS</option> 
              </select>
           </div>
           <br/>
           <div class="field">
              <label class="label_field">Status Kawin</label>
              <select name="status_kawin" class="form-control" required>
               <option value="">-</option>
               <option value="BELUM KAWIN">BELUM KAWIN</option> 
               <option value="KAWIN">KAWIN</option> 
              </select>
           </div>
           <br/>
           <div class="field">
              <label class="label_field">Golongan Darah</label>
              <select name="gol_darah" class="form-control" required>
               <option value="">-</option>
               <option value="A">A</option>
               <option value="B">B</option>
               <option value="AB">AB</option>
               <option value="O">O</option>
              </select>
           </div>
           <br/>
           <div class="field">
              <label class="label_field">No Kepegawaian</label>
              <input type="text" class="form-control" name="nomor_pegawai">
           </div>
           <br/>
           <div class="field">
              <label class="label_field">TMT</label>
              <input type="date" class="form-control" name="tmt_pegawai">
           </div>
           <br/>
           <div class="field">
              <label class="label_field">Golongan</label>
              <select name="golongan_id" class="form-control" required>
               <option value="">-</option>
               @foreach (golongan() as $item)
               <option value="{{$item->id}}">{{$item->golongan}}</option>
               @endforeach
              </select>
           </div>
           <br/>
           <div class="field">
              <label class="label_field">Unit Kerja</label>
              <select name="unit_kerja_id" class="form-control" required>
               <option value="">-</option>
               @foreach (unitkerja() as $item)
               <option value="{{$item->id}}">{{$item->nama}}</option>
               @endforeach
              </select>
           </div>
           <br/>
           
           <div class="field margin_0">
            
              <button class="main_bt"><i class="fa fa-save"></i> Simpan</button>
           </div>
        </fieldset>
        </form>
    </div>
  </div>
  
@endsection
@push('js')

@endpush