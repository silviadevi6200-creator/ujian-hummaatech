@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold mb-1">
            <i class="bi bi-journal-arrow-up text-warning"></i>
            Data Peminjaman
        </h2>

        <p class="text-muted mb-0">
            Kelola data transaksi peminjaman alat pada sistem rental kamera.
        </p>
    </div>

    <a href="{{ route('peminjaman.create') }}"
       class="btn btn-warning text-dark fw-semibold px-4">
        <i class="bi bi-plus-circle me-1"></i>
        Tambah Peminjaman
    </a>

</div>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">

    <i class="bi bi-check-circle-fill me-2"></i>
    {{ session('success') }}

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert">
    </button>

</div>
@endif

<div class="card shadow-sm">

    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">

        <h5 class="mb-0 fw-bold">
            <i class="bi bi-list-ul text-warning"></i>
            Daftar Peminjaman
        </h5>

        <span class="badge bg-warning text-dark rounded-pill px-3 py-2">
            {{ $peminjaman->count() }} Data
        </span>

    </div>

    <div class="card-body p-0">

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">
                    <tr>
                        <th width="60">No</th>
                        <th>Pelanggan</th>
                        <th>Alat</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th class="text-center" width="150">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($peminjaman as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $item->pelanggan->nama }}</td>

                        <td>{{ $item->alat->nama_alat }}</td>

                        <td>{{ $item->tanggal_pinjam }}</td>

                        <td>{{ $item->tanggal_kembali }}</td>

                        <td>{{ $item->jumlah }}</td>

                        <td>
                            <span class="badge bg-warning text-dark">
                                {{ $item->status }}
                            </span>
                        </td>

                        <td class="text-center">

                            <a href="{{ route('peminjaman.edit', $item->id) }}"
                               class="btn btn-sm btn-outline-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <form action="{{ route('peminjaman.destroy', $item->id) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Yakin ingin menghapus data peminjaman ini?')">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="8" class="text-center py-5">

                            <i class="bi bi-journal-x display-4 text-secondary"></i>

                            <p class="text-muted mt-3 mb-0">
                                Belum ada data peminjaman.
                            </p>

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection