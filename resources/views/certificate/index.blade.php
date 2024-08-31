@extends('layouts.app')
@section('title', 'Data Certificate')


@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('certificate.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Sertifikat</th>
                    <th>Penyelenggara</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($certificates as $certificate)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $certificate->nama_sertifikat }}</th>
                        <th>{{ $certificate->penyelenggara }}</th>
                        <th>{{ $certificate->tgl_sertifikat }}</th>
                        <td><img src="{{ asset('storage/image/' . $certificate->gambar) }}" width="100" alt="">
                        <th>
                            <a href="{{ route('certificate.edit', $certificate->id) }}"
                                class="btn btn-success btn-xs">Edit</a>
                            <form action="{{ route('certificate.destroy', $certificate->id) }}" class="d-inline"
                                method="POST">
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
