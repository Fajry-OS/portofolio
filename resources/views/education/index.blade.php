@extends('layouts.app')
@section('title', 'Data Education')


@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('education.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pendidikan</th>
                    <th>Kejuruan</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($educations as $education)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $education->pendidikan }}</th>
                        <th>{{ $education->jurusan }}</th>
                        <th>{{ $education->tgl_mulai }}</th>
                        <th>{{ $education->tgl_selesai }}</th>
                        <th>
                            <a href="{{ route('education.edit', $education->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <form action="{{ route('education.destroy', $education->id) }}" class="d-inline" method="POST">
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
