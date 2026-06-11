<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Kamera</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body{
            background:#f8fafc;
            font-family:'Segoe UI',sans-serif;
        }

        /* Sidebar */
        .sidebar{
            width:260px;
            min-height:100vh;
            background:#111827;
            position:fixed;
            left:0;
            top:0;
            z-index:1000;
        }

        .logo{
            padding:25px;
            text-align:center;
            border-bottom:1px solid rgba(255,255,255,.1);
        }

        .logo h4{
            color:#fff;
            margin:0;
            font-weight:700;
        }

        .sidebar .nav-link{
            color:#cbd5e1;
            margin:6px 12px;
            padding:12px 18px;
            border-radius:12px;
            transition:all .3s ease;
        }

        .sidebar .nav-link i{
            margin-right:10px;
        }

        .sidebar .nav-link:hover{
            background:#f59e0b;
            color:#fff;
            transform:translateX(4px);
        }

        .sidebar .nav-link.active{
            background:#f59e0b;
            color:#fff;
            font-weight:600;
        }

        /* Main */
        .main-content{
            margin-left:260px;
        }

        /* Topbar */
        .topbar{
            background:#fff;
            padding:18px 30px;
            box-shadow:0 2px 15px rgba(0,0,0,.05);
        }

        .content{
            padding:25px;
        }

        /* Card */
        .card{
            border:none;
            border-radius:18px;
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-4px);
            box-shadow:0 15px 30px rgba(0,0,0,.08);
        }

        @media(max-width:768px){

            .sidebar{
                position:relative;
                width:100%;
                min-height:auto;
            }

            .main-content{
                margin-left:0;
            }
            }

            .form-control,
            .form-select,
            textarea {
                border-radius: 10px;
                padding: 10px 14px;
            }

            .form-control:focus,
            .form-select:focus,
            textarea:focus {
                border-color: #f59e0b;
                box-shadow: 0 0 0 0.15rem rgba(245, 158, 11, 0.2);
            }

            .btn {
                border-radius: 10px;
            }

            

    </style>

</head>
<body>

<!-- Sidebar -->
<div class="sidebar">

    <div class="logo">
        <h4>
            <i class="bi bi-camera-reels-fill text-warning"></i>
            Rental Kamera
        </h4>
    </div>

    <ul class="nav flex-column mt-3">

        <li class="nav-item">
            <a href="{{ route('dashboard') }}"
               class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid-1x2-fill"></i>
                Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('kategori-alat.index') }}"
               class="nav-link {{ request()->routeIs('kategori-alat.*') ? 'active' : '' }}">
                <i class="bi bi-bookmark-star-fill"></i>
                Kategori Alat
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('alat.index') }}"
               class="nav-link {{ request()->routeIs('alat.*') ? 'active' : '' }}">
                <i class="bi bi-camera-reels-fill"></i>
                Data Alat
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('pelanggan.index') }}"
               class="nav-link {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}">
                <i class="bi bi-person-vcard-fill"></i>
                Pelanggan
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('peminjaman.index') }}"
               class="nav-link {{ request()->routeIs('peminjaman.*') ? 'active' : '' }}">
                <i class="bi bi-journal-arrow-up"></i>
                Peminjaman
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('pengembalian.index') }}"
               class="nav-link {{ request()->routeIs('pengembalian.*') ? 'active' : '' }}">
                <i class="bi bi-journal-arrow-down"></i>
                Pengembalian
            </a>
        </li>

        <li class="nav-item mt-4">

            <a href="#"
            class="nav-link"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">

                <i class="bi bi-box-arrow-right"></i>
                Logout

            </a>

            <form id="logout-form"
                action="{{ route('logout') }}"
                method="POST"
                class="d-none">

                @csrf

            </form>

        </li>

    </ul>

</div>

<!-- Main Content -->
<div class="main-content">

    <div class="topbar d-flex justify-content-between align-items-center">

        <h5 class="mb-0 fw-bold">
            <i class="bi bi-camera-reels-fill text-warning"></i>
            Sistem Rental Kamera
        </h5>

        <div class="d-flex align-items-center">
            <i class="bi bi-person-circle fs-4 text-secondary"></i>
            <span class="ms-2 fw-semibold">
                {{ Auth::user()->name }}
            </span>
        </div>

    </div>

    <div class="content">
        @yield('content')
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>