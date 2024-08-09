<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="col-lg-5">
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
    
</body>
</html>