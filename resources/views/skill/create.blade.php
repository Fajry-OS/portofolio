@extends('layouts.app')
@section('title', 'Add Education')
@section('content')
    <form action="{{ route('skill.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Skill</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_skill" placeholder="Nama Skill">
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('skill.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection
