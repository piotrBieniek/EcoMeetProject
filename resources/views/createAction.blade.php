@extends('layouts.mainPanel')

@section('content')
    <h1 class="title" style="margin-bottom: 4px">Dodaj <span class="green">akcję</span></h1>
    <p style="margin-top: 4px; text-align: center">Uzupełnij podstawowe informacje o swoim <span class="green">eko</span>wydarzeniu. Dodatkowe, szczegółowe informacje będziesz mógł uzupełnić w module edycji</p>
    <div class="actionBox">
        <form action="" method="POST">
            @csrf
            <style>
                .bodyBox .actionBox .infoBox:hover{
                    transform: scale(1);
                }
            </style>
            <div class="infoBox" style="padding-top: 3px; text-align: center; margin-top: 16px">
                <p class="name" style="margin-bottom: 2px">Tytuł</p>
                <input name="title" type="text" class="text" value="" placeholder="Tytuł">

                <p class="name" style="margin-bottom: 2px">Link do zdjęcia</p>
                <input name="photo" type="text" class="text" value="" placeholder="Link do zdjęcia">

                <p class="name" style="margin-bottom: 2px">Data akcji</p>
                <input type="date" name="time" class="text" value="" placeholder="Data akcji">
                
                <p class="name" style="margin-bottom: 2px">Adres</p>
                <input type="text" name="address" class="text" value="" placeholder="Adres">
            
                <select class="text" style="padding: 0; text-align: center; height: 40px; margin-top: 10px" name="city">
                    <option value="" selected disabled hidden>Wybierz miasto</option>
                    @foreach ($cities as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
                <input class="submit22" type="submit" value="Dodaj">
            </div>
            
        </form>
    </div>
@endsection