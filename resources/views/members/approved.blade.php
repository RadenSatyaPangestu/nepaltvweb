@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Daftar Anggota yang Disetujui</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach($members as $member)
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    @if($member->photo)
                        <img src="{{ asset('storage/' . $member->photo) }}" class="card-img-top" alt="{{ $member->name }}" style="height: 200px; object-fit: cover;">
                    @else
                        <img src="https://via.placeholder.com/300x200?text=No+Photo" class="card-img-top" alt="No photo">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $member->name }}</h5>
                        <p class="card-text">
                            Email: {{ $member->email }} <br>
                            Kelas: {{ $member->school_class }}
                        </p>

                        @if($isAdmin)
                            <a href="{{ url('/members/edit/'.$member->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ url('/members/delete/'.$member->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus anggota ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach

        @if($members->isEmpty())
            <div class="col-12">
                <p class="text-muted">Belum ada anggota yang disetujui.</p>
            </div>
        @endif
    </div>
</div>
@endsection
