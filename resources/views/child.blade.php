@extends('home')


@section('content')
@php
    $users = [
        [
            "nama" => "firman",
            "foto" => "https://picsum.photos/200",
            "bio" => "who am i",
            "active" => false,
            "alamat" => "bandung",
            "role" => "admin"
        ],
        [
            "nama" => "abdul",
            "foto" => "https://picsum.photos/200",
            "bio" => "what do you mine",
            "active" => true,
            "alamat" => "tasik",
            "role" => "user"
        ],
        [
            "nama" => "rohman",
            "foto" => "https://picsum.photos/200",
            "bio" => "how about",
            "active" => false,
            "alamat" => "jakarta",
            "role" => "user",
        ],
        [
            "nama" => "ciman",
            "foto" => "https://picsum.photos/200",
            "bio" => "programer enthusiast",
            "active" => true,
            "alamat" => "surabaya",
            "role" => "admin"
        ],
        [
            "nama" => "shinta",
            "foto" => "https://picsum.photos/200",
            "bio" => "promise you",
            "active" => false,
            "alamat" => "malang",
            "role" => "user"
        ],
        [
            "nama" => "shanti",
            "foto" => "https://picsum.photos/200",
            "bio" => "love you",
            "active" => true,
            "alamat" => "jatiwaras",
            "role" => "admin"
        ],
        [
            "nama" => "lila",
            "foto" => "https://picsum.photos/200",
            "bio" => "lalalal you",
            "active" => true,
            "alamat" => "jawa barat",
            "role" => "admin"
        ],
        [
            "nama" => "hanif",
            "foto" => "https://picsum.photos/200",
            "bio" => "player you",
            "active" => false,
            "alamat" => "bandung",
            "role" => "user"
        ],
        [
            "nama" => "lalila",
            "foto" => "https://picsum.photos/200",
            "bio" => "up to you",
            "active" => false,
            "alamat" => "taraju",
            "role" => "user"
        ],
        [
            "nama" => "dhika",
            "foto" => "https://picsum.photos/200",
            "bio" => "promise you",
            "active" => true,
            "alamat" => "dago",
            "role" => "admin"
        ],
    ];


    $user = array_filter( $users, function($user){
            $filter = [
            "active" => true,
            "role" => 'admin'
        ];

        return $user['active'] === $filter['active'] && $user['role'] === $filter ['role'];
    });

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user</title>
</head>
<body>
    <h1 style="text-align: center; color:blue; font-size:50px">Daftar User</h1>
    <div style="display: flex; flex-wrap:wrap;">
        @foreach ($user as $usr)
            @include('card');
        @endforeach
    </div>
</body>
</html>
@endsection
