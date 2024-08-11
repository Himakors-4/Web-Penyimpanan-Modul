@extends('layouts.app')
@section('title', 'Modul List')

@section('content')
    <div class="container mt-5">
        <h2>Modul List</h2>
        <x-table :headers="['No', 'Nama Modul', 'Deskripsi', 'File Name', 'File Size', 'File Type', 'Actions']">
            @foreach ($moduls as $modul)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $modul->nama_modul }}</td>
                    <td>{{ $modul->deskripsi }}</td>
                    <td>{{ $modul->file_name }}</td>
                    <td>{{ $modul->file_size }} bytes</td>
                    <td>{{ $modul->file_type }}</td>
                    <td>
                        <x-button variant="primary" text="Edit" :href="route('modul.edit', $modul->id)" class="btn-sm" />
                        <x-button variant="success" text="Download" :href="route('modul.download', $modul->id)" class="btn-sm" />                            
                        <x-form action="{{ route('modul.delete', $modul->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <x-button type="submit" variant="danger" text="Delete" class="btn-sm" />
                        </x-form>
                    </td>
                </tr>
            @endforeach
        </x-table>
    </div>
@endsection