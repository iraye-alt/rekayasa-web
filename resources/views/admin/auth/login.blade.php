<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-box {
            max-width: 400px;
            margin: 100px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .btn-login {
            background: #f7b500;
            color: #fff;
            font-weight: bold;
            border: none;
        }
        .btn-login:hover {
            background: #e0a300;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h4 class="text-center mb-4 fw-bold">Admin Login</h4>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-login w-100 mt-2">Login</button>
            </form>
            <div class="text-center mt-3">
                <a href="/" class="text-muted text-decoration-none">← Back to Website</a>
            </div>
        </div>
    </div>
</body>
</html>
