@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold mb-1">
            <i class="bi bi-pencil-square text-warning"></i>
            Edit Kategori Alat
        </h2>

        <p class="text-muted mb-0">
            Perbarui informasi kategori alat pada sistem rental kamera.
        </p>
    </div>

    <a href="{{ route('kategori-alat.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i>
        Kembali
    </a>

</div>

<div class="card shadow-sm">

    <div class="card-header bg-white py-3">
        <h5 class="mb-0 fw-bold">
            <i class="bi bi-folder-symlink text-warning"></i>
            Form Edit Kategori
        </h5>
    </div>

    <div class="card-body">

        <form action="{{ route('kategori-alat.update', $kategoriAlat->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Nama Kategori
                </label>

                <input
                    type="text"
                    name="nama_kategori"
                    class="form-control @error('nama_kategori') is-invalid @enderror"
                    value="{{ old('nama_kategori', $kategoriAlat->nama_kategori) }}"
                    placeholder="Masukkan nama kategori">

                @error('nama_kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-4">

                <label class="form-label fw-semibold">
                    Keterangan
                </label>

                <textarea
                    name="keterangan"
                    rows="4"
                    class="form-control @error('keterangan') is-invalid @enderror"
                    placeholder="Masukkan keterangan kategori">{{ old('keterangan', $kategoriAlat->keterangan) }}</textarea>

                @error('keterangan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="d-flex gap-2">

                <button type="submit" class="btn btn-warning text-dark fw-semibold">
                    <i class="bi bi-check-circle-fill"></i>
                    Update
                </button>

                <a href="{{ route('kategori-alat.index') }}" class="btn btn-light border">
                    <i class="bi bi-x-circle"></i>
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

@endsection