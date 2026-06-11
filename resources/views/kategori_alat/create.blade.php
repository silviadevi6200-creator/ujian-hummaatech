@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold mb-1">
            <i class="bi bi-plus-circle-fill text-warning"></i>
            Tambah Kategori Alat
        </h2>

        <p class="text-muted mb-0">
            Tambahkan kategori baru untuk mengelompokkan alat rental kamera.
        </p>
    </div>

    <a href="{{ route('kategori-alat.index') }}" class="btn btn-outline-secondary">
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
            Form Tambah Kategori
        </h5>
    </div>

    <div class="card-body">

        <form action="{{ route('kategori-alat.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="nama_kategori" class="form-label fw-semibold">
                    Nama Kategori
                </label>

                <input
                    type="text"
                    id="nama_kategori"
                    name="nama_kategori"
                    class="form-control @error('nama_kategori') is-invalid @enderror"
                    placeholder="Contoh: Kamera DSLR"
                    value="{{ old('nama_kategori') }}">

                @error('nama_kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="keterangan" class="form-label fw-semibold">
                    Keterangan
                </label>

                <textarea
                    id="keterangan"
                    name="keterangan"
                    rows="4"
                    class="form-control @error('keterangan') is-invalid @enderror"
                    placeholder="Masukkan keterangan kategori (opsional)">{{ old('keterangan') }}</textarea>

                @error('keterangan')
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

                <a href="{{ route('kategori-alat.index') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-x-circle me-1"></i>
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

@endsection     alat/create.blade.php