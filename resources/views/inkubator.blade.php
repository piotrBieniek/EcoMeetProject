<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>EkoInkubator EcoMeet</title>
</head>
<body>
    <div class="inkubator">
        <div class="photo">
            <h1 class="iTitle" style="text-align: center"><span class="green">Eko</span>Inkubator</h1>
        </div>
        <div class="iBox">
            <h2>Aktualności</h2>
            <div class="news">
                <div class="left">
                    <img src="https://grants.capital/wp-content/themes/grants-theme/assets/images/grants-capital-logo.jpg" alt="">
                </div>
                <div class="right">
                    <h1><span style="color: #1B2C60">grants.capital</span> patronem <span class="green">Eko</span>Inkubatora</h1>
                    <p>Jest nam miło poinformować, że grants.capital obiął patronatem EkoInkubator Przedsiębiorczości EcoMeet w zakresie wsparcia merytorycznego dot. tworzenia start-up'ów i wsparcia przy pozyskiwaniu dotacji dla podopiecznych inkubatora. <a href="https://server106109.nazwa.pl/ecomeet/photo/List_intencyjny.pdf" style="color: #11D100" target="_blanc">List_intencyjny.pdf</a></p>
                </div>
            </div>
            <div class="news">
                <div class="left">
                    <img src="\ico\clock.png" alt="">
                </div>
                <div class="right">
                    <h1>Wystartowała rekrutacja do <span class="green">Eko</span>Inkubatora</h1>
                    <p>Zapraszamy wszystkie projekty, które zakresem obejmują ochronę środowiska do zgłoszenia się za pomocą <a href="https://forms.gle/x8BbpSYXS7TrCGQ47" style="color: #11D100" target="_blanc">formularza</a>.</p>
                </div>
            </div>

            <h2>Co to jest <span class="green">Eko</span>Inkubator?</h2>
            <p class="description"><span class="green">Eko</span>Inkubator Przedsiębiorczości jest to inicjatywa, której celem jest wspieranie rozwoju projektów, które swoją działalnością obejmują ochronę środowiska. <span class="green">Eko</span>Inkubator, przekaże podopiecznym wiedzę dotyczącą zarówno tworzenia jak i opisywania projektów. Każdy podopieczny inkubatora, posiada dostęp do specjalistów, którzy współpracują z EcoMeet. <br />Jak wygląda rozwinięcie projektu z Inkubatorem Przedsiębiorczości:</p>
            <div class="" style="text-align: center;">
                <p style="font-size: 25px; margin-bottom: 10px; margin-top: 10px"><span style="font-size: 50px; color: #11D100; font-weight: bold">1.</span> Twój <span class="green">Eko</span>Pomysł</p>
                <p style="font-size: 25px; margin-bottom: 10px; margin-top: 10px"><span style="font-size: 50px; color: #11D100; font-weight: bold">2.</span> Pomoc EcoMeet i mentorów</p>
                <p style="font-size: 25px; margin-bottom: 10px; margin-top: 10px"><span style="font-size: 50px; color: #11D100; font-weight: bold">3.</span> Gotowy produkt chroniący środowisko</p>    
            </div>
            
            
            <h2>W jaki sposób pomagamy nowym projektom?</h2>
            <p class="description">Każdy podopieczny <span class="green">Eko</span>Inkubatora przechodzi szkolenia podczas, których:</p>
            <li>dowiaduje się jak prowadzić rozmowy biznesowe</li>
            <li>przeprowadzana jest symulacja negocjacji</li>
            <li>otrzymuje wzór biznes planu z instrukcją</li>
            <li>szkoli się z używania narzędzi informatycznych (PowerPoint, Figma, Canva), które pozwalają zaprezentować projekt</li>
            <li>zdobywa wiedzę dot. pozyskiwania finansowania na różnych etapach rozwoju projektu</li>
            <li>zapoznaje się z podstawowymi zasadami księgowości</li>
            <li>dowiaduje się jak wygląda proces zakładania firmy (JDG, Sp. z o.o.)</li>
            <li>zdobywa cenną wiedzę od naszych patronów</li>

            {{-- <h2>Dlaczego warto dołączyć do <span class="green">Eko</span>Inkubatora?</h2>
             --}}
            <h2>Jak dołączyć do <span class="green">Eko</span>Inkubatora?</h2>
            <p class="description">
                To <span class="green">proste</span>! <br />
                Wypełnij formularz: <a href="https://forms.gle/x8BbpSYXS7TrCGQ47" style="color: #11D100" target="_blanc">https://forms.gle/x8BbpSYXS7TrCGQ47</a>, a my się z tobą skontaktujemy!    
            </p>
            
            <h2 style="text-align: center">Nasz Patron</h2>
            <div class="" style="text-align: center">
                <img src="https://grants.capital/wp-content/themes/grants-theme/assets/images/grants-capital-logo.jpg" alt="">
            </div>
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