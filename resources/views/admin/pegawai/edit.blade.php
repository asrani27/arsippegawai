@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row column_title">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Edit Data</h2>
       </div>
    </div>
  </div>
  <div class="white_shd full margin_bottom_30">
    <div class="padding_infor_info">
        <form method="post" action="/superadmin/pegawai/edit/{{$data->id}}">
            @csrf
        <fieldset>

            <div class="field">
               <label class="label_field">NIP pegawai</label>
               <input type="text" class="form-control" name="nip" value="{{$data->nip}}">
            </div>
            <br/>
            <div class="field">
               <label class="label_field">Nama Lengkap pegawai</label>
               <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
            </div>
            <br/>
            <div class="field">
               <label class="label_field">alamat</label>
               <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}">
            </div>
            <br/>
         <div class="field">
            <label class="label_field">Telp</label>
            <input type="text" class="form-control" name="telp" value="{{$data->telp}}">
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" value="{{$data->tempat_lahir}}">
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="{{$data->tanggal_lahir}}">
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Jenis Kelamin</label>
            <select name="jkel" class="form-control" required>
               <option value="">-</option>
               <option value="L" {{$data->jkel == 'L' ? 'selected':''}}>Laki-Laki</option> 
               <option value="P" {{$data->jkel == 'P' ? 'selected':''}}>Perempuan</option> 
            </select>
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Agama</label>
            <select name="agama" class="form-control" required>
               <option value="">-</option>
               <option value="ISLAM" {{$data->agama == 'ISLAM' ? 'selected':''}}>ISLAM</option> 
               <option value="KRISTEN" {{$data->agama == 'KRISTEN' ? 'selected':''}}>KRISTEN</option> 
               <option value="HINDU" {{$data->agama == 'HINDU' ? 'selected':''}}>HINDU</option> 
               <option value="BUDDHA" {{$data->agama == 'BUDDHA' ? 'selected':''}}>BUDDHA</option> 
            </select>
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Status Pegawai</label>
            <select name="status_pegawai" class="form-control" required>
               <option value="">-</option>
               <option value="CPNS" {{$data->status_pegawai == 'CPNS' ? 'selected':''}}>CPNS</option> 
               <option value="PNS" {{$data->status_pegawai == 'PNS' ? 'selected':''}}>PNS</option> 
            </select>
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Status Kawin</label>
            <select name="status_kawin" class="form-control" required>
               <option value="">-</option>
               <option value="BELUM KAWIN" {{$data->status_kawin == 'BELUM KAWIN' ? 'selected':''}}>BELUM KAWIN</option> 
               <option value="KAWIN" {{$data->status_kawin == 'KAWIN' ? 'selected':''}}>KAWIN</option> 
            </select>
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Golongan Darah</label>
            <select name="gol_darah" class="form-control" required>
               <option value="">-</option>
               <option value="A" {{$data->gol_darah == 'A' ? 'selected':''}}>A</option>
               <option value="B" {{$data->gol_darah == 'B' ? 'selected':''}}>B</option>
               <option value="AB" {{$data->gol_darah == 'AB' ? 'selected':''}}>AB</option>
               <option value="O" {{$data->gol_darah == 'O' ? 'selected':''}}>O</option>
            </select>
         </div>
         <br/>
         <div class="field">
            <label class="label_field">No Kepegawaian</label>
            <input type="text" class="form-control" name="nomor_pegawai" value="{{$data->nomor_pegawai}}">
         </div>
         <br/>
         <div class="field">
            <label class="label_field">TMT</label>
            <input type="date" class="form-control" name="tmt_pegawai" value="{{$data->tmt_pegawai}}">
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Golongan</label>
            <select name="golongan_id" class="form-control" required>
               <option value="">-</option>
               @foreach (golongan() as $item)
               <option value="{{$item->id}}" {{$data->golongan_id == $item->id ? 'selected':''}}>{{$item->golongan}}</option>
               @endforeach
            </select>
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Unit Kerja</label>
            <select name="unit_kerja_id" class="form-control" required>
               <option value="">-</option>
               @foreach (unitkerja() as $item)
               <option value="{{$item->id}}" {{$data->unit_kerja_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
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