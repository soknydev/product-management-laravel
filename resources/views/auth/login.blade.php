<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4; }
        .login-container { background: white; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); border-radius: 5px; }
        .input-group { margin-bottom: 10px; }
        label { display: block; }
        input { width: 100%; padding: 8px; }
        button { width: 100%; padding: 10px; background: blue; color: white; border: none; cursor: pointer; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        @if ($errors->any())
            <p class="error">{{ $errors->first() }}</p>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="name">Name:</label>
                <input type="text" name="name" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
