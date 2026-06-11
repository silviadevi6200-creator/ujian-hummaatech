@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold mb-1">
            <i class="bi bi-journal-plus text-warning"></i>
            Tambah Peminjaman
        </h2>

        <p class="text-muted mb-0">
            Tambahkan data peminjaman alat rental kamera.
        </p>
    </div>

    <a href="{{ route('peminjaman.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i>
        Kembali
    </a>

</div>

<div class="card shadow-sm">

    <div class="card-header bg-white py-3">

        <h5 class="mb-0 fw-bold">
            <i class="bi bi-pencil-square text-warning"></i>
            Form Tambah Peminjaman
        </h5>

    </div>

    <div class="card-body">

        <form action="{{ route('peminjaman.store') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Pelanggan
                </label>

                <select
                    name="pelanggan_id"
                    class="form-select @error('pelanggan_id') is-invalid @enderror">

                    <option value="">-- Pilih Pelanggan --</option>

                    @foreach($pelanggan as $item)
                        <option value="{{ $item->id }}"
                            {{ old('pelanggan_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->nama }}
                        </option>
                    @endforeach

                </select>

                @error('pelanggan_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Alat
                </label>

                <select
                    name="alat_id"
                    class="form-select @error('alat_id') is-invalid @enderror">

                    <option value="">-- Pilih Alat --</option>

                    @foreach($alat as $item)
                        <option value="{{ $item->id }}"
                            {{ old('alat_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->nama_alat }}
                        </option>
                    @endforeach

                </select>

                @error('alat_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Tanggal Pinjam
                    </label>

                    <input
                        type="date"
                        name="tanggal_pinjam"
                        class="form-control @error('tanggal_pinjam') is-invalid @enderror"
                        value="{{ old('tanggal_pinjam') }}">

                    @error('tanggal_pinjam')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Tanggal Kembali
                    </label>

                    <input
                        type="date"
                        name="tanggal_kembali"
                        class="form-control @error('tanggal_kembali') is-invalid @enderror"
                        value="{{ old('tanggal_kembali') }}">

                    @error('tanggal_kembali')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

            </div>

            <div class="mb-4">

                <label class="form-label fw-semibold">
                    Jumlah
                </label>

                <input
                    type="number"
                    name="jumlah"
                    class="form-control @error('jumlah') is-invalid @enderror"
                    value="{{ old('jumlah') }}"
                    min="1"
                    placeholder="Masukkan jumlah alat yang dipinjam">

                @error('jumlah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-4">

                <label class="form-label fw-semibold">
                    Status
                </label>

                <input
                    type="text"
                    class="form-control"
                    value="Dipinjam"
                    readonly>

            </div>

            <div class="d-flex gap-2">

                <button type="submit" class="btn btn-warning text-dark fw-semibold">
                    <i class="bi bi-check-circle-fill me-1"></i>
                    Simpan
                </button>

                <a href="{{ route('peminjaman.index') }}"
                   class="btn btn-outline-secondary">
                    <i class="bi bi-x-circle me-1"></i>
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

@endsection