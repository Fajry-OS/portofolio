@extends('layouts.app')
@section('title', 'Add Experience')
@section('content')
    <form action="{{ route('experience.store') }}" method="POST">
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Perusahaan</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="perusahaan" placeholder="Nama Perusahaan">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Posisi</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="posisi" placeholder="Posisi">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Deskripsi</label>
            </div>
            <div class="col-sm-5">
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Tanggal Mulai</label>
            </div>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="tgl_mulai" placeholder="Nama Kategori">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Tanggal Selesai</label>
            </div>
            <div class="col-sm-4">
                <input type="date" id="tgl_selesai" class="form-control" name="tgl_selesai">
            </div>
            <div class="col-sm-2 ml-4 d-flex align-items-center">
                <input type="checkbox" id="tgl_skrg" class="form-check-input" name="tgl_skrg" value="Sekarang">
                <label for="tgl_skrg" class="form-check-label">Sekarang</label>
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('experience.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
    <!-- JavaScript untuk Mengelola Status Tanggal Selesai -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('tgl_skrg');
            const dateField = document.getElementById('tgl_selesai');

            function toggleDateField() {
                if (checkbox.checked) {
                    dateField.disabled = true;
                    dateField.value = ''; // Kosongkan nilai tanggal jika checkbox dicentang
                } else {
                    dateField.disabled = false;
                }
            }

            checkbox.addEventListener('change', toggleDateField);

            // Initial state
            toggleDateField();
        });
    </script>
@endsection
