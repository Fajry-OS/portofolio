@extends('layouts.app')

@section('title', 'Profile Page')

@section('content')
    <div class="container my-4">
        <!-- Profile Section -->
        <div class="row my-2 justify-content-around">
            <div class="col-md-4 col-lg-3 text-center mb-4">
                <!-- Profile Picture -->
                <img src="{{ asset('storage/image/' . auth()->user()->gambar) }}" alt="Profile Picture"
                    class="img-fluid rounded-circle mb-3" style="max-width: 150px;">
                <!-- User Information -->
                <h4 class="mb-2">{{ auth()->user()->name }}</h4>
                <p class="text-muted">{{ auth()->user()->tagline }}</p>
                <!-- Edit Button -->
                <a href="{{ route('profile.edit', auth()->user()->id) }}" class="btn btn-primary">Edit Profile</a>
            </div>
            <div class="col-md-8 col-lg-7">
                <!-- Description -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">About Me</h4>
                        <p class="card-text">{{ auth()->user()->deskripsi }}</p>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Contact Information</h5>
                        <ul class="list-unstyled mt-4">
                            <li><strong>Email:</strong> {{ auth()->user()->email }}</li>
                            <li><strong>Address:</strong> {{ auth()->user()->alamat }}</li>
                        </ul>
                    </div>
                </div>

                <!-- Social Icons -->
                <div class="mt-4">
                    <a class="text-decoration-none mx-2" href="{{ auth()->user()->linkedin }}" target="_blank"
                        title="LinkedIn">
                        <i class="fab fa-linkedin fa-3x text-primary"></i>
                    </a>
                    <a class="text-decoration-none mx-2" href="{{ auth()->user()->instagram }}" target="_blank"
                        title="Instagram">
                        <i class="fab fa-instagram fa-3x text-danger"></i>
                    </a>
                    <a class="text-decoration-none mx-2" href="{{ auth()->user()->facebook }}" target="_blank"
                        title="Facebook">
                        <i class="fab fa-facebook fa-3x text-primary"></i>
                    </a>
                    <a class="text-decoration-none mx-2"
                        href="https://wa.me/{{ strpos(auth()->user()->no_telp, '0') === 0 ? '62' . substr(auth()->user()->no_telp, 1) : auth()->user()->no_telp }}"
                        target="_blank" title="Whatsapp">
                        <i class="fab fa-whatsapp fa-3x text-success"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
