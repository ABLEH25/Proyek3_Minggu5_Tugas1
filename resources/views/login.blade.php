
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Pengguna</h1>

    @if ($errors->any())
        <p style="color: red;">
            {{ $errors->first() }}
        </p>
    @endif

    <form action="{{ url('/login') }}" method="POST">
        @csrf

        <div>
            <label for="username">Username</label>
            <input
                type="text"
                id="username"
                name="username"
                value="{{ old('username') }}"
                required
            >
        </div>

        <div>
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                required
            >
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>