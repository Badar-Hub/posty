<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
    <style>
        .header {
            padding: 14px;
            background-color: #c4c4c4;
        }
        .header h3 {
            margin: auto !important;
        }
        ul {
            display: flex;
            justify-content: flex-end;
            margin: auto !important;
        }
        li {
            list-style-type: none;
            padding: 0 10px;
            font-size: 20px;
            cursor: pointer;
            color: rgb(94, 0, 0);
        }
        li:hover {
            color: #0d6efd;
        }
        a {
            text-decoration: none;
            color:rgb(94, 0, 0);
        }
        a:hover {
            color: :#0d6efd;
        }
        .content-wrapper {
            display: flex;
            justify-content:center;
            max-width: 1200px;
            margin: auto !important;
        }
    </style>
</head>

<body>
    <div class="row header">
        <div class="col-6">
            <ul>
                <li>
                    <a href="{{route('posts')}}">Posts</a>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
        <ul class="col-6">
                @auth
                <li>
                    <a href="">Badar Abdullah</a>
                </li>
                <li>
                    <a>Logout</a>
                </li>
                @endauth
                @guest
                <li>
                    <a>Login User</a>
                </li>
                <li>
                    <a href="{{route('register')}}">Register User</a>
                </li>
                @endguest
                
        </ul>
    </div>
    <div class="content-wrapper">
        @yield('content')
    </div>
</body>

</html>