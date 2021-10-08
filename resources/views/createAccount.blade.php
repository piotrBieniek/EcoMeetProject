<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>EcoMeet • Utwórz konto</title>
</head>
<body>
    <div class="loginContent">
        <div class="loginBox">
            <form action="" method="POST">
                @csrf
                <h1>Utwórz konto</h1>
                <input class="inputText" required type="text" name="name" placeholder="Imie">
                <input class="inputText" required name="email" type="email" placeholder="Email"><br />
                <input class="inputText" required name="password" type="password" placeholder="Hasło"><br />
                <input class="inputButton" type="submit" value="Zaloguj">
            </form>
            <p style="margin-top: 40px; font-size: 14px; margin-bottom: 2px">Masz konto?</p>
            <a href="/logowanie"><p style="color: #11D100; margin-top: 3px; font-weight: bold">Zaloguj się!</p></a>
        </div>
    </div>
</body>
</html>