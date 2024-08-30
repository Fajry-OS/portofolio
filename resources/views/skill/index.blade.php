@extends('layouts.app')
@section('title', 'Data Skill')


@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('skill.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Skill</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $skill->nama_skill }}</th>
                        <th>
                            <a href="{{ route('skill.edit', $skill->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <form action="{{ route('skill.destroy', $skill->id) }}" class="d-inline" method="POST">
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
