<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Modul List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Modul List</h2>
        <!-- Display all the modules -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Modul</th>
                    <th>Deskripsi</th>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th>File Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($moduls as $modul)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $modul->nama_modul }}</td>
                        <td>{{ $modul->deskripsi }}</td>
                        <td>{{ $modul->file_name }}</td>
                        <td>{{ $modul->file_size }} bytes</td>
                        <td>{{ $modul->file_type }}</td>
                        <td>
                            <a href="{{ route('modul.edit', $modul->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('modul.download', $modul->id) }}" class="btn btn-success btn-sm">Download</a>
                            <form action="{{ route('modul.delete', $modul->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Add new module form -->
        <h3>Add New Modul</h3>
        <form action="{{ route('add_modul') }}" method="POST" enctype="multipart/form-data">
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
            <button type="submit" class="btn btn-primary">Upload</button>
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

</body>

</html>
