<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Jokiin</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            background: white;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        .logo {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .logo span { color: #f59e0b; }
        h2 {
            text-align: center;
            color: #1e293b;
            margin-bottom: 0.5rem;
            font-size: 1.25rem;
        }
        p.sub {
            text-align: center;
            color: #64748b;
            font-size: 0.875rem;
            margin-bottom: 1.5rem;
        }
        .error {
            background: #fee2e2;
            color: #dc2626;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            font-size: 0.875rem;
        }
        label {
            display: block;
            font-size: 0.8rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.4rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1.5px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.95rem;
            margin-bottom: 1rem;
            transition: border-color 0.2s;
        }
        input:focus {
            outline: none;
            border-color: #1e3a5f;
        }
        button {
            width: 100%;
            padding: 0.875rem;
            background: #1e3a5f;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover { background: #162d4a; }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">Joki<span>in</span></div>
        <h2>Login Admin</h2>
        <p class="sub">Masukkan kredensial untuk melanjutkan</p>

        @if ($errors->has('message'))
            <div class="error">{{ $errors->first('message') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <label>Username</label>
            <input type="text" name="username" placeholder="Username admin" required autofocus>

            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>
