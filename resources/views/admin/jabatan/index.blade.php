@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row column_title">
  <div class="col-md-12">
     <div class="page_title">
        <h2>Data Jabatan</h2>
     </div>
  </div>
</div>
<div class="white_shd full margin_bottom_30">
  <div class="full graph_head">
     <div class="heading1 margin_0">
       
      <a href="/superadmin/jabatan/create" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
     </div>
  </div>
  <div class="table_section padding_infor_info">
     <div class="table-responsive-sm">
        <table class="table table-bordered">
           <thead>
              <tr style="background-color: rgb(52, 52, 51); font-weight:bold;color:aliceblue">
                <th>No</th>
                <th>Nama jabatan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
           </thead>
           <tbody>
            
            @foreach ($data as $key => $item)
            <tr>
              <td>{{$data->firstItem() + $key}}</td>
              <td>{{$item->nama}}</td>
              <td>{{$item->keterangan}}</td>
              <td>
                <a href="/superadmin/jabatan/edit/{{$item->id}}" class="btn btn-flat btn-sm btn-success rounded-circle"><i class="fa fa-edit"></i></a>
                <a href="/superadmin/jabatan/delete/{{$item->id}}" class="btn btn-flat btn-sm btn-danger rounded-circle" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
           </tbody>
        </table>
        {{$data->links()}}
     </div>
  </div>
</div>

@endsection
@push('js')

@endpush
