@extends('layouts.app')

@section('title', 'Data Message')

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->nama }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($contact->pesan, 50) }}</td>
                        <td>
                            <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-info btn-sm">View</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No messages found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
