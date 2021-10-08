<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>EcoMeet • Logowanie</title>
</head>
<body>

    @if (Auth::check())
        <script>window.location.replace("/panel");</script>
    @endif

    <div class="loginContent">
        <div class="loginBox">
            @if($errors->any())
                    <div class="">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>    
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form action="" method="POST">
                @csrf
                <h1>Logowanie</h1>
                
                <input class="inputText" name="email" required type="email" placeholder="Email"><br />
                <input class="inputText" name="password" required type="password" placeholder="Hasło"><br />
                <input class="inputButton" type="submit" value="Zaloguj">
            </form>
            <p style="margin-top: 40px; font-size: 14px; margin-bottom: 2px">Nie masz konta?</p>
            <a href="/utworz-konto"><p style="color: #11D100; margin-top: 3px; font-weight: bold">Utwórz je!</p></a>
        </div>
    </div>
</body>
</html>