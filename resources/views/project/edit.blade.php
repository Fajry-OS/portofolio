@extends('layouts.app')
@section('title', 'Edit Project')

@section('content')
    <form action="{{ route('project.update', $project->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Project Name</label>
            <input type="text" class="form-control" name="judul" placeholder="Nama Project" value="{{ $project->judul }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Descriptions</label>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control">{{ $project->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="picture">Picture</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('project.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection
