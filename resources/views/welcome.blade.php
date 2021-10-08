<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>EcoMeet</title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163664151-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-163664151-1');
    </script>
</head>
<body>
    <div class="homePage">
        <div class="top">
            <div class="left">
                <img src="\ico\ecomeet.svg" alt="">
                <p class="quote"><span class="green">"</span>Ziemia to kropka pod znakiem zapytania.<span class="green">"</span></p>
                <p class="quoteAuthor">~Stanisław Jerzy Lec</p>
                <a href="\wybierz-miasto"><button>Akcje społeczne w okolicy</button></a> <br />
                <a href="\inkubator"><button>Dołącz do <span class="green">eko</span>inkubatora</button></a> <br />
                <a href="\#more"><button>Dowiedz się więcej o <span class="green">eko</span>logii</button></a>
            </div>
            <div class="right"></div>
        </div>
        <div class="" id="more"></div>
        <div class="modL">

        </div>

        <?php
        $i = 0;
        ?>

        @foreach ($quotes as $item)
            @if ($i % 2 ==0)
                <div class="line">
                    <div class="left">
                        <img src="/quoteIco/{{ $item['photoName'] }}" alt="">
                    </div>
                    <div class="right">
                        <div class="quote">{{ $item['content'] }}</div>
                    </div>
                </div>
            @else
                <div class="big">
                    <div class="line">
                        <div class="right">
                            <div class="quote">{{ $item['content'] }}</div>
                        </div>
                        <div class="left">
                            <img src="/quoteIco/{{ $item['photoName'] }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="small">
                    <div class="line">
                        <div class="left">
                            <img src="/quoteIco/{{ $item['photoName'] }}" alt="">
                        </div>
                        <div class="right">
                            <div class="quote">{{ $item['content'] }}</div>
                        </div>
                    </div>
                </div>
            @endif
            
            <?php
                $i++;
                if ($i == 5)
                    break;
            ?>
        @endforeach
    </div>
    <footer>
        <div class="line"></div>
        <p>Kontakt: <span class="green">kontakt@ecomeet.pl</span></p>
        <p style="font-size: 10px">Projekt, w szczególności System, obecnie, jest pracą na konkurs MINI HACKATHON, prace są w toku, korzystać z systemu powinny tylko osoby powiązane z konkursem</p>
        <p>ecomeet © {{ now()->year }}</p>
    </footer>
</body>
</html>