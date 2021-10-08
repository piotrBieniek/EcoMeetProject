@extends('layouts.main')



@section('content')
    <h1 class="title" style="margin-bottom: 10px">{{ $action['title'] }}</h1>
    <script>
        function showMenu()
        {
            document.getElementById('participation').style.display = "block";
        }
    </script>
    
    <div class="actionBox">
        <div class="photo" style="background-image: url('{{ $action['photo'] }}')"></div>
        <div class="info">
            <p>Czas: <b>{{$action['time']}}</b> Wyświetlenia: <b>{{$action['views']}}</b> Weźmie udział: <b>{{$action['takePart']}}</b></p>
            <button onclick="showMenu()" id="participationBut">Biorę udział!</button>
            <div class="part" id="participation" style="display: none">
                <h1 style="font-size: 20px; text-align: center">Zapisz <span class="green">się</span>!</h1>
                <form action="/biore-udzial" method="POST" style="text-align: center">
                    @csrf
                    <p>Podaj adres email, na którego organizato będzie mógł wysłać dodatkowe informacje</p>
                    <input name="email" class="inText" type="email" placeholder="email">
                    <input type="hidden" name="id" value="{{ $action['id'] }}">
                    <input class="inSub" type="submit" value="Wyślij">
                </form>
            </div>
        </div>
        <h1 class="moreInfo">Szczegółowe <span class="green">info</span>rmacje</h1>

        @foreach ($actionInfo as $item)
            <div class="infoBox">
                <div class="infoElement">
                    <h1>{{ $item['title'] }}</h1>
                    <p>{{ $item['description'] }}</p>
                </div>
            </div>
        @endforeach

        

        <p class="mapName">Lokalizacja</p>
        <iframe src="https://maps.google.com/maps?q={{ $cityName }}%20{{ $action['address'] }}&output=embed" frameborder="0"></iframe>
    </div>
    

@endsection