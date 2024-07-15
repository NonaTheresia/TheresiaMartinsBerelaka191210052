@extends('layouts.backend.app', [
    'title' => 'Edit Contact Us',
    'pageTitle' => 'Edit Contact Us',
])

@section('content')
@include('layouts.components.datatables')
@include('layouts.components.alert-dismissible')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('contact.index') }}" class="btn btn-danger btn-sm">Batalkan</a>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('contact.update', $contact->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input required value="{{ $contact->name }}" class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input required value="{{ $contact->email }}" class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea required class="form-control @error('message') is-invalid @enderror" name="message" id="message" rows="5">{{ $contact->message }}</textarea>
                @error('message')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>
    </div>
</div>
@stop