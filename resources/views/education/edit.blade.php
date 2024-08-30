@extends('layouts.app')
@section('title', 'Edit Education')

@section('content')
    <form action="{{ route('education.update', $education->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Pendidikan</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan"
                    value="{{ $education->pendidikan }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Kejuruan</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="jurusan" placeholder="Kejuruan"
                    value="{{ $education->jurusan }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">GPA</label>
            </div>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="gpa" placeholder="GPA" value="{{ $education->gpa }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Tanggal Mulai</label>
            </div>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="tgl_mulai" value="{{ $education->tgl_mulai }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Tanggal Selesai</label>
            </div>
            <div class="col-sm-4">
                <input type="date" id="tgl_selesai" class="form-control" name="tgl_selesai"
                    value="{{ $education->tgl_selesai }}">
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('education.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection
