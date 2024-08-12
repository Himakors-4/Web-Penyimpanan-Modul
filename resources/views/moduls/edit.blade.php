@extends('layouts.app')
@section('title', 'Edit Modul')

@section('content')
<div class="container mt-3">
    <h2 style="font-weight: bold;">Edit Modul</h2>
    <x-form action="{{ route('modul.update', $modul->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_modul">Nama Modul</label>
            <input type="text" class="form-control" id="nama_modul" name="nama_modul" value="{{ $modul->nama_modul }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $modul->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="pdf">Upload PDF (Optional)</label>
            <input type="file" class="form-control" id="pdf" name="pdf" accept="application/pdf">
        </div>
        <x-button type="submit" variant="primary" text="Update" />
    </x-form>
    @if ($errors->any())
            <x-alert type="danger" :message="$errors->first()" />
    @endif
@endsection