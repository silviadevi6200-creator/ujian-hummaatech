<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rental Kamera</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#f8fafc;
            font-family:'Segoe UI',sans-serif;
        }

        .login-card{
            width:100%;
            max-width:420px;
            border:none;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
        }

        .login-header{
            background:linear-gradient(135deg,#111827,#1f2937);
            padding:30px;
            text-align:center;
            color:white;
        }

        .login-header i{
            font-size:60px;
            color:#f59e0b;
        }

        .login-body{
            padding:30px;
            background:white;
        }

        .form-control{
            border-radius:10px;
            padding:12px;
        }

        .form-control:focus{
            border-color:#f59e0b;
            box-shadow:0 0 0 .15rem rgba(245,158,11,.25);
        }

        .btn-login{
            background:#f59e0b;
            border:none;
            border-radius:10px;
            padding:12px;
            font-weight:600;
        }

        .btn-login:hover{
            background:#d97706;
        }
    </style>

</head>
<body>

<div class="card login-card">

    <div class="login-header">

        <i class="bi bi-camera-reels-fill"></i>

        <h3 class="fw-bold mt-3 mb-1">
            Rental Kamera
        </h3>

        <p class="mb-0 text-light">
            Silakan login terlebih dahulu
        </p>

    </div>

    <div class="login-body">

        @if ($errors->any())

            <div class="alert alert-danger">

                {{ $errors->first() }}

            </div>

        @endif

        <form action="{{ route('authenticate') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Masukkan email"
                    required>

            </div>

            <div class="mb-4">

                <label class="form-label fw-semibold">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Masukkan password"
                    required>

            </div>

            <button type="submit"
                    class="btn btn-warning w-100 fw-semibold">

                <i class="bi bi-box-arrow-in-right me-1"></i>

                Login

            </button>

        </form>

    </div>

</div>

</body>
</html>