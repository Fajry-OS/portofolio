@extends('layouts.app')
@section('title', 'Add Certificate')
@section('content')
    <form action="{{ route('certificate.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nama Sertifikat</label>
            <input type="text" class="form-control" name="nama_sertifikat" placeholder="Nama Project">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Penyelenggara</label>
            <input type="text" class="form-control" name="penyelenggara" placeholder="Penyelenggara">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Tanggal Sertifikat</label>
            <input type="date" class="form-control" name="tgl_sertifikat">
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
