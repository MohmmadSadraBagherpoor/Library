<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('login.login') }}">
        @error('error')
            {{ $message }}
        @enderror
        <br>
        @csrf
        <label for="email">email</label>
        <input type="email" name="email" id="email">
        <br>
        @error('email')
            {{ $message}}
        @enderror
        <br>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <br>
        @error('password')
        {{ $message}}
        @enderror
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
