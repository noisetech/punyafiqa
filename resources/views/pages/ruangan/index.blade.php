@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1  style="margin-bottom: 40px; margin-top: 20px;">
        Data Ruangan
      </h1>

      <a href="{{ route('ruangan.create') }}" class="btn btn-sm btn-primary" style="margin-bottom: 40px;">
        <i class="fa fa-sm fa-plus-square-o"></i> Tambah Data Ruangan
      </a>

      @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    </section>


    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="box">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Ruangan</th>
                                <th>Kapasitas Ruangan</th>
                                <th>Waktu Ruangan</th>
                                <th>Status Ruangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $no => $item)
                            <tr>
                                <td>{{ $no + $items->firstItem() }}</td>
                                <td>{{ $item->nama_ruangan }}</td>
                                <td>{{ $item->kapasitas_ruangan }}</td>
                                <td>{{ $item->waktu_ruangan }}</td>
                                <td>{{ $item->status_ruangan }}</td>
                                <td>
                                    <a href="{{ route('ruangan.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-sm fa-pencil">
                                        </i>
                                    </a>

                                    <form action="{{ route('ruangan.destroy', $item->id) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-sm btn-danger" onclick="return confirm('ANDA YAKIN INGIN MENGAHAPUS DATA?'); ">
                                        <i class="fa fa-sm fa-trash"></i>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="6">
                                    Data Kosong
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>


            {{ $items->links() }}
        </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
