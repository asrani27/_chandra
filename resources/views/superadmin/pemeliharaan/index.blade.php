@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data pemeliharaan</h3>

                <div class="card-tools">
                    <a href="/superadmin/pemeliharaan/print" class='btn btn-sm btn-outline-primary'><i
                            class="fa fa-print"></i>
                        Print</a>
                    <a href="/superadmin/pemeliharaan/add" class='btn btn-sm btn-outline-primary'>Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap table-sm table-bordered">
                    <thead class="bg-info">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kode pemeliharaan</th>
                            <th>Aset</th>
                            <th>Jenis</th>
                            <th>keterangan</th>
                            <th>biaya</th>
                            <th>aksi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:14px">
                            <td>{{$key + 1}}</td>
                            <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->aset == null ? null : $item->aset->nama}}</td>
                            <td>{{$item->jenis}}</td>
                            <td>{{$item->keterangan}}</td>
                            <td>{{number_format($item->biaya)}}</td>
                            <td>{{$item->aksi}}</td>
                            <td class="text-right">

                                <a href="/superadmin/pemeliharaan/edit/{{$item->id}}"
                                    class="btn btn-sm btn-outline-success"><i class="fa fa-edit"></i></a>
                                <a href="/superadmin/pemeliharaan/delete/{{$item->id}}"
                                    class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>{{$data->links()}}
    </div>
</div>

@endsection