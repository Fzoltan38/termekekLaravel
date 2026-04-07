<!DOCTYPE html>
<html lang="en">
<head>
    <title>ILDI - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-main: #0f0f0f;
            --gold: #c8a96b;
            --gold-light: #e3c78a;
            --text-main: #f5f1e8;
            --border-soft: rgba(200, 169, 107, 0.22);
        }

        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
            background:
                radial-gradient(circle at top right, rgba(200,169,107,0.10), transparent 25%),
                linear-gradient(135deg, #0b0b0b 0%, #141414 45%, #101010 100%);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: linear-gradient(180deg, #1a1a1a 0%, #131313 100%);
            border: 1px solid var(--border-soft);
            border-radius: 22px;
            padding: 40px 30px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        }

        .login-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.4rem;
            text-align: center;
            margin-bottom: 10px;
        }

        .login-subtitle {
            text-align: center;
            color: #cfc7b8;
            margin-bottom: 25px;
        }

        .form-control {
            background: #111 !important;
            border: 1px solid rgba(200,169,107,0.2) !important;
            color: #fff !important;
            border-radius: 14px !important;
            padding: 12px 14px !important;
            margin-bottom: 15px;
        }

        .form-control:focus {
            border-color: var(--gold-light) !important;
            box-shadow: 0 0 0 0.2rem rgba(200,169,107,0.15) !important;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            border-radius: 30px;
            border: none;
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: #111;
            font-weight: bold;
            transition: 0.3s;
        }

        .login-btn:hover {
            transform: translateY(-2px);
        }

        .alert-custom {
            background: rgba(200,169,107,0.15);
            border: 1px solid rgba(200,169,107,0.4);
            color: var(--gold-light);
            border-radius: 12px;
            text-align: center;
            margin-bottom: 15px;
            padding: 10px;
        }
    </style>
</head>

<body>

<div class="login-card">

    <div class="login-title">Login</div>
    <div class="login-subtitle">Access your account</div>

    <!-- Success Message -->
    @if(session('message'))
        <div class="alert-custom">
            {{ session('message') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
               placeholder="Email" value="{{ old('email') }}" required>
        @error('email')
            <div style="color:#e3c78a;font-size:0.85rem;margin-bottom:8px;">{{ $message }}</div>
        @enderror

        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
               placeholder="Password" required>
        @error('password')
            <div style="color:#e3c78a;font-size:0.85rem;margin-bottom:8px;">{{ $message }}</div>
        @enderror

        <button type="submit" class="login-btn">
            <i class="fas fa-sign-in-alt mr-2"></i>Login
        </button>

        <div style="text-align:center;margin-top:15px;">
            <a href="{{ route('register') }}" style="color:#c8a96b;">Don't have an account? Register</a>
        </div>
    </form>

</div>

</body>
</html>