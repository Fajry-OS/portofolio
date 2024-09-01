@extends('layouts.app')

@section('title', 'Profile Page')

@section('content')
    <div class="container my-4">
        <!-- Profile Section -->
        <div class="row mb-4">
            <div class="col-md-4 text-center">
                <!-- Profile Picture -->
                <img src="{{ asset('storage/image/' . auth()->user()->gambar) }}" alt="Profile Picture"
                    class="img-fluid rounded-circle mb-3" style="max-width: 150px;">
                <!-- User Information -->
                <h3>{{ auth()->user()->name }}</h3>
                <p class="text-muted">{{ auth()->user()->tagline }}</p>
                <!-- Edit Button -->
                <a href="{{ route('profile.edit', auth()->user()->id) }}" class="btn btn-primary">Edit Profile</a>
            </div>
            <div class="col-md-8">
                <!-- Description -->
                <h4>About Me</h4>
                <p>{{ auth()->user()->deskripsi }}</p>

                <!-- Contact Information -->
                <ul class="list-unstyled mt-4">
                    <li><strong>Email:</strong> {{ auth()->user()->email }}</li>
                    <li><strong>Address:</strong> {{ auth()->user()->alamat }}</li>
                </ul>

                <!-- Social Icons -->
                <div class="social-icons mt-4">
                    <a class="social-icon mr-2" href="{{ auth()->user()->linkedin }}" target="_blank" title="LinkedIn">
                        <i class="fab fa-linkedin fa-3x"></i>
                    </a>
                    <a class="social-icon mr-2" href="{{ auth()->user()->instagram }}" target="_blank" title="Instagram">
                        <i class="fab fa-instagram fa-3x"></i>
                    </a>
                    <a class="social-icon mr-2" href="{{ auth()->user()->facebook }}" target="_blank" title="Facebook">
                        <i class="fab fa-facebook fa-3x"></i>
                    </a>
                    <a class="social-icon"
                        href="https://wa.me/{{ strpos(auth()->user()->no_telp, '0') === 0 ? '62' . substr(auth()->user()->no_telp, 1) : auth()->user()->no_telp }}"
                        target="_blank" title="Whatsapp">
                        <i class="fab fa-whatsapp fa-3x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
