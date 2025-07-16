@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2>Selamat Datang, Admin!</h2>
            <p>Ini adalah halaman dashboard admin <strong>NepalTV</strong>.</p>
        </div>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Kelola Anggota</h5>
            <p class="card-text">Lihat dan setujui pendaftaran anggota baru yang masih pending.</p>
            <a href="{{ url('/members/pending') }}" class="btn btn-primary">Lihat Pendaftar Pending</a>
        </div>
    </div>

    {{-- Tambahan opsional: statistik --}}
    {{-- 
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Total Member</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalMembers ?? '-' }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Menunggu Persetujuan</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $pendingCount ?? '-' }}</h5>
                </div>
            </div>
        </div>
    </div>
    --}}
</div>
@endsection
