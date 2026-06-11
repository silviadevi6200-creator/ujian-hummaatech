@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold mb-1">
            <i class="bi bi-person-plus-fill text-warning"></i>
            Tambah Pelanggan
        </h2>

        <p class="text-muted mb-0">
            Tambahkan data pelanggan baru ke sistem rental kamera.
        </p>
    </div>

    <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i>
        Kembali
    </a>

</div>

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">

    <i class="bi bi-exclamation-triangle-fill me-2"></i>
    <strong>Terjadi kesalahan!</strong> Silakan periksa kembali data yang diinput.

    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

</div>
@endif

<div class="card shadow-sm">

    <div class="card-header bg-white py-3">

        <h5 class="mb-0 fw-bold">
            <i class="bi bi-pencil-square text-warning"></i>
            Form Tambah Pelanggan
        </h5>

    </div>

    <div class="card-body">

        <form action="{{ route('pelanggan.store') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Nama Pelanggan
                </label>

                <input
                    type="text"
                    name="nama"
                    class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama') }}"
                    placeholder="Contoh: Silvia Devi">

                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Alamat
                </label>

                <textarea
                    name="alamat"
                    rows="3"
                    class="form-control @error('alamat') is-invalid @enderror"
                    placeholder="Masukkan alamat lengkap">{{ old('alamat') }}</textarea>

                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Nomor HP
                </label>

                <input
                    type="text"
                    name="no_hp"
                    class="form-control @error('no_hp') is-invalid @enderror"
                    value="{{ old('no_hp') }}"
                    placeholder="Contoh: 081234567890">

                @error('no_hp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-4">

                <label class="form-label fw-semibold">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                    placeholder="Contoh: silvia@gmail.com">

                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="d-flex gap-2">

                <button type="submit" class="btn btn-warning text-dark fw-semibold">
                    <i class="bi bi-check-circle-fill me-1"></i>
                    Simpan
                </button>

                <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-x-circle me-1"></i>
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

@endsection