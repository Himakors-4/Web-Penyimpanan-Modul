<!DOCTYPE html>
<html>

<head>
    <title>Edit Modul</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Modul</h2>
        <form action="{{ route('modul.update', $modul->id) }}" method="POST" enctype="multipart/form-data">
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
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
