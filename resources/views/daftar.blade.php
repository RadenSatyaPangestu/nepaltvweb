@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Form Pendaftaran Eskul NepalTV</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="/daftar" enctype="multipart/form-data" class="p-4 bg-light rounded shadow">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">No HP:</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Kelas:</label>
                    <input type="text" name="school_class" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Foto:</label>
                    <input type="file" name="photo" accept="image/*" class="form-control">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
