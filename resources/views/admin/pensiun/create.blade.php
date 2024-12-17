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
        <form method="post" action="/superadmin/pensiun/create">
            @csrf
        <fieldset>
         
         <div class="field">
            <label class="label_field">Tanggal Pensiun</label>
            <input type="date" class="form-control" name="tanggal">
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Pegawai</label>
            <select name="pegawai_id" class="form-control" required>
             <option value="">-</option>
             @foreach (pegawai() as $item)
             <option value="{{$item->id}}">{{$item->nip}} - {{$item->nama}}</option>
             @endforeach
            </select>
         </div>
         <br/>
         <div class="field">
            <label class="label_field">Keterangan</label>
            <input type="text" class="form-control" name="keterangan">
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