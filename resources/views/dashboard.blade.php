@extends('layouts.app')

@section('content')

<!-- HERO BANNER -->
<div class="card mb-4 overflow-hidden">

    <div class="card-body p-4 text-white"
         style="background:linear-gradient(135deg,#111827,#1f2937);">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <span class="badge bg-warning text-dark mb-3">
                    Sistem Rental Kamera
                </span>

                <h2 class="fw-bold mb-3">
                    Kelola Rental Kamera Lebih Mudah
                </h2>

                <p class="mb-0 text-light">
                    Kelola data alat, pelanggan, peminjaman,
                    dan pengembalian dalam satu dashboard.
                </p>

            </div>

            <div class="col-lg-5 text-center">

                <img
                    src="{{ asset('images/camera-banner.png') }}"
                    class="img-fluid"
                    style="max-height:220px;">

            </div>

        </div>

    </div>

</div>

<!-- STATISTIK -->
<div class="row g-4 mb-4">

    <div class="col-md-6 col-xl">
        <div class="card h-100">
            <div class="card-body">

                <small class="text-secondary">
                    Kategori Alat
                </small>

                <div class="d-flex justify-content-between align-items-center mt-3">

                    <h2 class="fw-bold mb-0">
                        {{ $totalKategori }}
                    </h2>

                    <i class="bi bi-bookmark-star-fill text-warning fs-1"></i>

                </div>

            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl">
        <div class="card h-100">
            <div class="card-body">

                <small class="text-secondary">
                    Data Alat
                </small>

                <div class="d-flex justify-content-between align-items-center mt-3">

                    <h2 class="fw-bold mb-0">
                        {{ $totalAlat }}
                    </h2>

                    <i class="bi bi-camera-reels-fill text-warning fs-1"></i>

                </div>

            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl">
        <div class="card h-100">
            <div class="card-body">

                <small class="text-secondary">
                    Pelanggan
                </small>

                <div class="d-flex justify-content-between align-items-center mt-3">

                    <h2 class="fw-bold mb-0">
                        {{ $totalPelanggan }}
                    </h2>

                    <i class="bi bi-person-vcard-fill text-warning fs-1"></i>

                </div>

            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl">
        <div class="card h-100">
            <div class="card-body">

                <small class="text-secondary">
                    Peminjaman
                </small>

                <div class="d-flex justify-content-between align-items-center mt-3">

                    <h2 class="fw-bold mb-0">
                        {{ $totalPeminjaman }}
                    </h2>

                    <i class="bi bi-journal-arrow-up text-warning fs-1"></i>

                </div>

            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl">
        <div class="card h-100">
            <div class="card-body">

                <small class="text-secondary">
                    Pengembalian
                </small>

                <div class="d-flex justify-content-between align-items-center mt-3">

                    <h2 class="fw-bold mb-0">
                        {{ $totalPengembalian }}
                    </h2>

                    <i class="bi bi-journal-arrow-down text-warning fs-1"></i>

                </div>

            </div>
        </div>
    </div>

</div>

<!-- BAWAH -->
<div class="row">

    <!-- Aktivitas -->
    <div class="col-lg-8 mb-4">

        <div class="card h-100">

            <div class="card-header bg-white border-0">

                <h5 class="fw-bold mb-0">

                    <i class="bi bi-activity text-warning me-2"></i>

                    Aktivitas Sistem

                </h5>

            </div>

            <div class="card-body">

                <div class="border rounded p-3 mb-3">

                    <i class="bi bi-camera-reels-fill text-warning me-2"></i>

                    Kelola seluruh data alat kamera yang tersedia.

                </div>

                <div class="border rounded p-3 mb-3">

                    <i class="bi bi-person-vcard-fill text-warning me-2"></i>

                    Kelola data pelanggan rental kamera.

                </div>

                <div class="border rounded p-3 mb-3">

                    <i class="bi bi-journal-arrow-up text-warning me-2"></i>

                    Kelola transaksi peminjaman alat.

                </div>

                <div class="border rounded p-3">

                    <i class="bi bi-journal-arrow-down text-warning me-2"></i>

                    Kelola transaksi pengembalian alat.

                </div>

            </div>

        </div>

    </div>

    <!-- Info -->
    <div class="col-lg-4 mb-4">

        <div class="card h-100">

            <div class="card-body text-center">

                <i class="bi bi-camera2 text-warning"
                   style="font-size:80px;"></i>

                <h4 class="fw-bold mt-3">
                    Rental Kamera
                </h4>

                <p class="text-secondary">

                    Sistem informasi berbasis Laravel
                    untuk memudahkan pengelolaan
                    penyewaan kamera dan perlengkapannya.

                </p>

            </div>

        </div>

    </div>

</div>

@endsection