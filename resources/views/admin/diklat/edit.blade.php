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
        <form method="post" action="/superadmin/diklat/edit/{{$data->id}}">
            @csrf
        <fieldset>

         
         <div class="field">
            <label class="label_field">Tanggal diklat</label>
            <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal}}">
         </div>
         <br/>
         
         <div class="field">
            <label class="label_field">Nama diklat</label>
            <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Waktu diklat</label>
            <input type="text" class="form-control" name="waktu" value="{{$data->waktu}}">
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Tempat diklat</label>
            <input type="text" class="form-control" name="tempat" value="{{$data->tempat}}">
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Pendidikan</label>
            <input type="text" class="form-control" name="pendidikan" value="{{$data->pendidikan}}">
         </div>
         <br/>
         <div class="field">
            <label class="label_field">No Sertifikat</label>
            <input type="text" class="form-control" name="nomor" value="{{$data->nomor}}">
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Pegawai</label>
            <select name="pegawai_id" class="form-control" required>
             <option value="">-</option>
             @foreach (pegawai() as $item)
             <option value="{{$item->id}}" {{$data->pegawai_id == $item->id ? 'selected':''}}>{{$item->nip}} - {{$item->nama}}</option>
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