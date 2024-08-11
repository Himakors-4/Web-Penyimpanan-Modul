<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @vite('resources/css/login.css')
    <title>Sign in</title>
</head>
<body>
    <img src="{{ asset('img/image1.png') }}" class="top-left-honeycomb ">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dsimiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="col-lg-5">
        <img src="{{ asset('img/logo.png') }}" class="logo">
        <h1>Sign-In Form</h1>
        <form action="/login" method="POST">
            @csrf
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email Address</label>
                
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <button class="btn-lg btn-primary" type="submit" value="Login">Sign in</button>
        </form>
        <small>Don't have an account? <a href="/signup">Sign up Now!</a></small>
    </div>

    <img src="{{ asset('img/image2.png') }}" class="bottom-right-honeycomb "> 
</body>
</html>