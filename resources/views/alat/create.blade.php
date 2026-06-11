@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold mb-1">
            <i class="bi bi-camera-reels-fill text-warning"></i>
            Tambah Data Alat
        </h2>

        <p class="text-muted mb-0">
            Tambahkan data alat baru yang akan disewakan.
        </p>
    </div>

    <a href="{{ route('alat.index') }}" class="btn btn-outline-secondary">
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
            Form Tambah Data Alat
        </h5>
    </div>

    <div class="card-body">

        <form action="{{ route('alat.store') }}" method="POST">

            @csrf

            <!-- Kategori -->
            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Kategori Alat
                </label>

                <select
                    name="kategori_id"
                    class="form-select @error('kategori_id') is-invalid @enderror">

                    <option value="">-- Pilih Kategori --</option>

                    @foreach($kategori as $item)
                        <option value="{{ $item->id }}"
                            {{ old('kategori_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->nama_kategori }}
                        </option>
                    @endforeach

                </select>

                @error('kategori_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Nama Alat -->
            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Nama Alat
                </label>

                <input
                    type="text"
                    name="nama_alat"
                    class="form-control @error('nama_alat') is-invalid @enderror"
                    value="{{ old('nama_alat') }}"
                    placeholder="Contoh: Canon EOS 80D">

                @error('nama_alat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Merk -->
            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Merk
                </label>

                <input
                    type="text"
                    name="merk"
                    class="form-control @error('merk') is-invalid @enderror"
                    value="{{ old('merk') }}"
                    placeholder="Contoh: Canon">

                @error('merk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="row">

                <!-- Stok -->
                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Stok
                    </label>

                    <input
                        type="number"
                        name="stok"
                        class="form-control @error('stok') is-invalid @enderror"
                        value="{{ old('stok') }}"
                        min="0">

                    @error('stok')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <!-- Harga -->
                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Harga Sewa
                    </label>

                    <input
                        type="number"
                        name="harga_sewa"
                        class="form-control @error('harga_sewa') is-invalid @enderror"
                        value="{{ old('harga_sewa') }}"
                        min="0"
                        placeholder="Contoh: 150000">

                    @error('harga_sewa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

            </div>

            <!-- Kondisi -->
            <div class="mb-4">

                <label class="form-label fw-semibold">
                    Kondisi
                </label>

                <select
                    name="kondisi"
                    class="form-select @error('kondisi') is-invalid @enderror">

                    <option value="">-- Pilih Kondisi --</option>

                    <option value="Baik"
                        {{ old('kondisi') == 'Baik' ? 'selected' : '' }}>
                        Baik
                    </option>

                    <option value="Rusak Ringan"
                        {{ old('kondisi') == 'Rusak Ringan' ? 'selected' : '' }}>
                        Rusak Ringan
                    </option>

                    <option value="Rusak"
                        {{ old('kondisi') == 'Rusak' ? 'selected' : '' }}>
                        Rusak
                    </option>

                </select>

                @error('kondisi')
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

                <a href="{{ route('alat.index') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-x-circle me-1"></i>
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

@endsection