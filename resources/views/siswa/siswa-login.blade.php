<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Guru</title>
</head>
<body>
    <form action="{{route('siswa.login.store')}}" method="post"> 
        @csrf
        <input type="text" name="username" placeholder="username"> <br>
        <input type="text" name="password" placeholder="password"> <br>
        <input type="submit" value="login">
    </form>
</body>
</html>