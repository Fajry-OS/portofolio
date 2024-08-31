@extends('layouts.app')
@section('title', 'Edit Certificate')

@section('content')
    <form action="{{ route('certificate.update', $certificate->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nama Sertifikat</label>
            <input type="text" class="form-control" name="nama_sertifikat" value="{{ $certificate->nama_sertifikat }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Penyelenggara</label>
            <input type="text" class="form-control" name="penyelenggara" value="{{ $certificate->penyelenggara }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Tanggal Sertifikat</label>
            <input type="date" class="form-control" name="tgl_sertifikat" value="{{ $certificate->tgl_sertifikat }}">
        </div>
        <div class="mb-3">
            <label for="picture">File Sertifikat</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('certificate.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection
