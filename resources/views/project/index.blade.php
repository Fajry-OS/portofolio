@extends('layouts.app')
@section('title', 'Data Project')


@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('project.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Project</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $project->judul }}</th>
                        <th>{{ $project->deskripsi }}</th>
                        <td><img src="{{ asset('storage/image/' . $project->gambar) }}" width="100" alt="">
                        <th>
                            <a href="{{ route('project.edit', $project->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <form action="{{ route('project.destroy', $project->id) }}" class="d-inline" method="POST">
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
