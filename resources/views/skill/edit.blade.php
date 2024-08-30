@extends('layouts.app')
@section('title', 'Edit Education')

@section('content')
    <form action="{{ route('skill.update', $skill->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Skill</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_skill" placeholder="Nama Skill"
                    value="{{ $skill->nama_skill }}">
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('skill.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection
