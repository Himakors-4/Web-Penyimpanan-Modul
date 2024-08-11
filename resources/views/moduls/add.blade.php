@extends('layouts.app')
@section('title', 'Add New Modul')

@section('content')
    <h3>Add New Modul</h3>
        <x-form action="{{ route('add_modul') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_modul">Nama Modul:</label>
                <input type="text" name="nama_modul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea name="deskripsi" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="pdf">PDF File:</label>
                <input type="file" name="pdf" class="form-control" required>
            </div>
            <x-button type="submit" variant="primary" text="Upload" />
        </x-form>
        @if ($errors->any())
            <x-alert type="danger" :message="$errors->first()" />
        @endif
    </div>
@endsection