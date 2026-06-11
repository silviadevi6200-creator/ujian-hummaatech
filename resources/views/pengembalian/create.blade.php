@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold mb-1">
            <i class="bi bi-journal-arrow-down text-warning"></i>
            Tambah Pengembalian
        </h2>

        <p class="text-muted mb-0">
            Tambahkan data pengembalian alat rental kamera.
        </p>
    </div>

    <a href="{{ route('pengembalian.index') }}"
       class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i>
        Kembali
    </a>

</div>

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">

    <i class="bi bi-exclamation-triangle-fill me-2"></i>

    <strong>Terjadi kesalahan!</strong>
    Silakan periksa kembali data yang diinput.

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert">
    </button>

</div>
@endif

<div class="card shadow-sm">

    <div class="card-header bg-white py-3">

        <h5 class="mb-0 fw-bold">
            <i class="bi bi-pencil-square text-warning"></i>
            Form Tambah Pengembalian
        </h5>

    </div>

    <div class="card-body">

        <form action="{{ route('pengembalian.store') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Peminjaman
                </label>

                <select
                    name="peminjaman_id"
                    class="form-select @error('peminjaman_id') is-invalid @enderror">

                    <option value="">
                        -- Pilih Peminjaman --
                    </option>

                    @foreach($peminjaman as $item)
                        <option value="{{ $item->id }}"
                            {{ old('peminjaman_id') == $item->id ? 'selected' : '' }}>

                            Peminjaman #{{ $item->id }}

                        </option>
                    @endforeach

                </select>

                @error('peminjaman_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Tanggal Pengembalian
                </label>

                <input
                    type="date"
                    name="tanggal_pengembalian"
                    class="form-control @error('tanggal_pengembalian') is-invalid @enderror"
                    value="{{ old('tanggal_pengembalian') }}">

                @error('tanggal_pengembalian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Denda
                </label>

                <input
                    type="number"
                    name="denda"
                    class="form-control @error('denda') is-invalid @enderror"
                    value="{{ old('denda', 0) }}"
                    min="0">

                @error('denda')
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
                    placeholder="Masukkan keterangan pengembalian">{{ old('keterangan') }}</textarea>

                @error('keterangan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="d-flex gap-2">

                <button type="submit"
                        class="btn btn-warning text-dark fw-semibold">

                    <i class="bi bi-check-circle-fill me-1"></i>
                    Simpan

                </button>

                <a href="{{ route('pengembalian.index') }}"
                   class="btn btn-outline-secondary">

                    <i class="bi bi-x-circle me-1"></i>
                    Batal

                </a>

            </div>

        </form>

    </div>

</div>

@endsection