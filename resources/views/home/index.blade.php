@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mt-3">
        <!-- Logo Section -->
        <div class="text-center">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Moful" class="img-fluid mb-4" style="max-width: 300px;">
            <h1 class="display-4">Selamat Datang di CrafBe!</h1>
            <p class="lead">Website ini dapat membantu anda menyimpan dan mengelola file anda.</p>
            <hr class="my-4">
            <p>Gunakan menu di samping untuk menjelajahi berbagai fitur dan lihat bagaimana kami dapat membantu Anda.</p>
                
        </div>
@endsection