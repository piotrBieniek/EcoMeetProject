<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>EcoMeet @yield('pageTitle')</title>
</head>
<body>
    <div class="topBox">
        <div class="left">
            <a href="\panel"><img src="{{ asset('ico/ecomeet.svg') }}" alt=""></a>
        </div>
        <div class="right">
            @if ( auth()->check() )
                <a href="\wyloguj"><button>Wyloguj</button></a>
            @else
                <a href="\logowanie"><button>Zaloguj</button></a>
            @endif
        </div>
    </div>
    <div class="bodyBox">
        @if ( auth()->check() )
            @yield('content')
        @else
        <p class="error">Dostęp do tej strony wymaga zalogowania.</p>
        @endif
    </div>
</div>
    <footer>
        <div class="line"></div>
        <p>Kontakt: <span class="green">kontakt@ecomeet.pl</span></p>
        <p style="font-size: 10px">Projekt, w szczególności System, obecnie, jest pracą na konkurs MINI HACKATHON, prace są w toku, korzystać z systemu powinny tylko osoby powiązane z konkursem</p>
        <p>ecomeet © {{ now()->year }}</p>
    </footer>
</body>
</html>