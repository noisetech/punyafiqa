@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1  style="margin-bottom: 20px; margin-top: 20px;">
     Mengubah Data Ruangan
      </h1>

    </section>


    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="box">
            <div class="box-body">
                <form action="{{ route('ruangan.update', $item->id) }}" method="POST">
                @csrf

                @method('put')

                <div class="form-group">
                    <label for="nama_ruangan">Nama Ruangan</label>
                    <input type="text" name="nama_ruangan" class="form-control" placeholder="Masukan Nama Ruangan" value="{{ $item->nama_ruangan }}">
                </div>

                <div class="form-group">
                    <label for="kapasitas_ruangan">Kapasitas Ruangan</label>
                    <input type="text" name="kapasitas_ruangan" class="form-control" placeholder="Masukan Kapasitas Ruangan" value="{{ $item->kapasitas_ruangan }}">
                </div>

                <div class="form-group">
                    <label for="waktu_ruangan">Waktu Ruangan</label>
                    <input type="text" name="waktu_ruangan" class="form-control" placeholder="Masukan Waktu Ruangan" value="{{ $item->waktu_ruangan }}">
                </div>

                <div class="form-group">
                    <label for="status_ruangan">Status Ruangan</label>
                    <input type="text" name="status_ruangan" class="form-control" placeholder="Masukan Status Ruangan" value="{{ $item->status_ruangan }}">
                </div>

                <button class="btn btn-block btn-warning" type="submit">
                    Ubah
                </button>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
