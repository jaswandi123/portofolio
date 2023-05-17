<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
    <h1>halaman contact</h1>
    <a href="{{route('home')}}" >home</a>
    <a href="{{route('profile')}}" >profile</a>
    <a href="{{route('about')}}" >about</a>
    <a href="{{route('contact')}}" >contact</a>
    <br>
    <br>
    <table>
        <tr>
        <td> Nama</td>
        <td>:</td>
        <td>{{$name}}</td>
        </tr>
        <tr>
        <td> Nomor HP</td>
        <td>:</td>
        <td>{{$hp}}</td>
        </tr>
    </table>
</body>
</html>