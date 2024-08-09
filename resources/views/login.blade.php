@extends('layouts.app')

@vite('resources/css/login.css')
@section('content')
        <x-form action="/students" buttonText="Login" class="justify-content-center align-items-center" style="height: 100vh;">
            <div class="mb-3">
                <input type="text" name="name" id="name" class="form-control" placeholder="username" required>
            </div>
            <div class="mb-3">
                <input type="text" name="nim" id="nim" class="form-control" placeholder="password" required>
            </div>
        </x-form>

@endsection