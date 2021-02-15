@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1  style="margin-bottom: 40px; margin-top: 20px;">
        Data Ruangan
      </h1>


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
                                <th>Penangung Jawab Peminjaman</th>
                                <th>Nama Ruangan Yang Di Pinjam</th>
                                <th>Tanggal Peminjaman Ruangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $no => $item)
                            <tr>
                                <td>{{ $no + $items->firstItem() }}</td>
                                <td>{{ $item->users->name }}</td>
                                <td>{{ $item->ruangan->nama_ruangan }}</td>
                                <td>{{ $item->tanggal_peminjaman->format('d-m-Y')  }}</td>
                               <td>
                                <a href="{{ route('peminjamanruangan.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fa fa-sm fa-pencil"></i>
                                </a>

                                <form action="{{ route('peminjamanruangan.destroy', $item->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('delete')

                                    <button class="btn btn-sm btn-danger">
                                        <i class="fa fa-sm fa-trash"></i>
                                    </button>
                                </form>
                               </td>
                            </tr>

                            @empty
                            <tr>
                                <td class="text-center" colspan="5">
                                    Data Kosong
                                </td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>

                    {{ $items->links() }}
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
