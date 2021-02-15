@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1  style="margin-bottom: 20px; margin-top: 20px;">
    Menambah Data Ruangan
      </h1>

    </section>


    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="box">
            <div class="box-body">
                <form action="{{ route('ruangan.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nama_ruangan">Nama Ruangan</label>
                    <input type="text" name="nama_ruangan" class="form-control" placeholder="Masukan Nama Ruangan" required value="{{ old('nama_ruangan') }}">
                </div>

                <div class="form-group">
                    <label for="kapasitas_ruangan">Kapasitas Ruangan</label>
                    <input type="text" name="kapasitas_ruangan" class="form-control" placeholder="Masukan Kapasitas Ruangan" required value="{{ old('kapasitas_ruangan') }}">
                </div>

                <div class="form-group">
                    <label for="waktu_ruangan">Waktu Ruangan</label>
                    <input type="text" name="waktu_ruangan" class="form-control" placeholder="Masukan Waktu Ruangan" required value="{{ old('waktu_ruangan') }}">
                </div>

                <div class="form-group">
                    <label for="status_ruangan">Status Ruangan</label>
                    <input type="text" name="status_ruangan" class="form-control" placeholder="Masukan Status Ruangan" required value="{{ old('status_ruangan') }}">
                </div>

                <button class="btn btn-block btn-primary" type="submit">
                    Simpan
                </button>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
