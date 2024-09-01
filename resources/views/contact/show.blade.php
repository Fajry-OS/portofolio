@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contact Detail</h1>

        <div class="card">
            <div class="card-header">
                Contact #{{ $contact->id }}
            </div>
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $contact->nama }}</p>
                <p><strong>Email:</strong> {{ $contact->email }}</p>
                <p><strong>Subject:</strong> {{ $contact->subject }}</p>
                <p><strong>Message:</strong></p>
                <p>{{ $contact->pesan }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('contact.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
