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
    <form method="POST" action="{{ route('register.register') }}">
    @csrf
    <input name="name" type="text" placeholder="name">
    <br>
        @error('name')
        <p style="color: red">{{ $message }}</p>
        @enderror
    <br>
    <input name="email" type="email" placeholder="email">
    <br>
        @error('email')
        <p style="color: red">{{ $message }}</p>
        @enderror
    <br>
    <input name="password" type="password" placeholder="password">
    <br>
        @error('password')
        <p style="color: red">{{ $message }}</p>
        @enderror
    <br>
    <input name="password_confirmation" type="password" placeholder="password confirmation">
    <br>
    <br>
    <button type="submit">submit</button>
    </form>
</body>
</html>
