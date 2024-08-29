@extends('layouts.app')
@section('title', 'Data Experience')


@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('experience.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Posisi</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiences as $experience)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $experience->perusahaan }}</th>
                        <th>{{ $experience->posisi }}</th>
                        <th>{{ $experience->tgl_mulai }}</th>
                        <th>
                            @if ($experience->tgl_skrg)
                                Sekarang
                            @else
                                {{ $experience->tgl_selesai ? $experience->tgl_selesai : 'N/A' }}
                            @endif
                        </th>
                        <th>
                            <a href="{{-- route('category.edit', $category->id) --}}" class="btn btn-success btn-xs">Edit</a>
                            <form action="{{-- route('category.destroy', $category->id) --}}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-xs btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>

                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
