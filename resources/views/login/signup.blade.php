<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @vite('resources/css/login.css')
    <title>Sign Up</title>
</head>
<body>
    <img src="{{ asset('img/image1.png') }}" class="top-left-honeycomb ">
    <div class="col-lg-5">
        <img src="{{ asset('img/logo.png') }}" class="logo" style="margin-top: 100px;">
        <h1>Sign up</h1>
        <form action="" method="POST">
            @csrf
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="role" name="role" value="dosen" >
                <label class="form-check-label" for="role">Dosen</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="role" name="role" value="mahasiswa" >
                <label class="form-check-label" for="role">Mahasiswa</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" required>
                <label for="name">Name</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" required>
                <label for="email">Email Address</label>
            </div>
            <div>
                <input type="password" class="form-control" id="password" name="password" required>
                <label for="password">Password</label>
            </div>

            <button class="btn-lg btn-primary" type="submit" value="Submit">Sign up</button>
        </form>
            <small>Already have an account? <a href="/signin">Sign in Now!</a></small>
    </div>
    <div class="honeycomb">
        <img src="{{ asset('img/image2.png') }}" class="bottom-right-honeycomb" style="bottom: -100px">
    </div>
</body>
</html>