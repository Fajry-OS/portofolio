@extends('layouts.app')
@section('title', 'Edit Profile')

@section('content')
    <form action="{{ route('profile.update', $profile->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="picture">Photo</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nama_lengkap">Nama</label>
            <input type="text" name="name" id="name" value="{{ $profile->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ $profile->email }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nama_lengkap">Tagline</label>
            <input type="text" name="tagline" id="tagline" value="{{ $profile->tagline }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="no_telpon">No Telepon</label>
            <input type="number" name="no_telp" id="no_telp" value="{{ $profile->no_telp }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Descriptions</label>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control">{{ $profile->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="facebook">Facebook</label>
            <input type="url" name="facebook" id="facebook" value="{{ $profile->facebook }}" class="form-control"
                placeholder="https://example.com">
        </div>
        <div class="mb-3">
            <label for="instagram">Instagram</label>
            <input type="url" name="instagram" id="instagram" value="{{ $profile->instagram }}" class="form-control"
                placeholder="https://example.com">
        </div>
        <div class="mb-3">
            <label for="linkedin">LinkedIn</label>
            <input type="url" name="linkedin" id="linkedin" value="{{ $profile->linkedin }}" class="form-control"
                placeholder="https://example.com">
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control">{{ $profile->alamat }}</textarea>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-12 d-inline">
                <a href="{{ route('profile.index') }}" class="btn btn-warning" type="submit">Kembali</a>
                <button class="btn btn-primary float-right" type="submit">Simpan</button>
            </div>
        </div>
        {{-- <div class="mb-3 row ">
            <div class="col-sm-10 ">
               
            </div>
        </div> --}}
    </form>
@endsection
