@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>

            </div>
            <form method="POST" action="/superadmin/pemeliharaan/add">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal </label>
                        <input type="date" name="tanggal" class="form-control"
                            value="{{\Carbon\Carbon::now()->format('Y-m-d')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode </label>
                        <input type="text" name="kode" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Aset</label>
                        <select class="form-control" name="aset_id">
                            @foreach (aset() as $item)
                            <option value="{{$item->id}}">{{$item->kode}} - {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">jenis</label>
                        <input type="text" name="jenis" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">keterangan</label>
                        <input type="text" name="keterangan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">biaya</label>
                        <input type="text" name="biaya" class="form-control" required onkeypress="return hanyaAngka(event)">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">aksi</label>
                        <input type="text" name="aksi" class="form-control" required>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    <a href="/superadmin/pemeliharaan" class="btn btn-outline-danger">Kembali</a>
                </div>
            </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection
@push('js')

@endpush