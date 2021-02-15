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
                <form action="{{ route('peminjamanruangan.update', $item->id) }}" method="POST">
                @csrf

                @method('put')


                <div class="form-group">
                    <label for="tanggal_peminjaman">Tanggal Peminjaman Ruangan</label>
                    <input type="date" name="tanggal_peminjaman" class="form-control" placeholder="Masukan Status Ruangan" value="{{ $item->tanggal_peminjaman }}">
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
