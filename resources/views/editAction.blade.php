@extends('layouts.mainPanel')

@section('content')
<div class="actionBox">
    <h1 class="moreInfo" style="margin-top: 0">Edytowanie akcji</h1>
    <div class="tempBox" style="text-align: center; margin-bottom: 20px; font-size: 17px">
        <a href="/akcje/zobacz/{{ $action['id'] }}" style="color: #11D100">Link do ogłoszenia</a>, <a href="/usun-akcje/{{ $action['id'] }}" style="color: #11D100">usuń</a>
    </div>

    <div class="photo" style="background-image: url('{{ $action['photo'] }}')"></div>
    <style>
        .bodyBox .actionBox .infoBox:hover{
            transform: scale(1);
        }
    </style>
    <div class="infoBox" style="padding-top: 3px; text-align: center; margin-top: 16px">
        <p class="name" style="margin-bottom: 2px">Status akcji</p>
        <form action="/zobacz/zmien-status" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $action['id'] }}">
            @if ($action['active'] == 1)
                <select onchange="this.form.submit()" name="active" id="" class="text" style="padding: 0; text-align: center">
                    <option value="1">Aktywne</option>
                    <option value="0">Nieaktywne</option>
                </select>
            @else
                <select onchange="this.form.submit()" name="active" id="" class="text" style="padding: 0; text-align: center">
                    <option value="0">Nieaktywne</option>
                    <option value="1">Aktywne</option>
                </select>
            @endif
            
        </form>
        
    </div>

    <div class="infoBox" style="padding-top: 3px; text-align: center; margin-top: 16px">
        <p class="name" style="margin-bottom: 2px">Tytuł</p>
        <input type="text" class="text" value="{{ $action['title'] }}">
    </div>
    <div class="infoBox" style="padding-top: 3px; text-align: center;">
        <p class="name" style="margin-bottom: 2px">Czas</p>
        <input type="text" class="text" value="{{ $action['time'] }}">
    </div>
    <div class="infoBox" style="padding-top: 3px; text-align: center;">
        <p class="name" style="margin-bottom: 2px">Adres</p>
        <input type="text" class="text" value="{{ $action['address'] }}">
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

    <div class="moreInfoForm">
        <form action="/panel/zobacz/dodaj-informacje" method="POST">
            @csrf
            <p style="text-align: center">Dodaj informację</p>
            <input name="title" type="text" class="inText" placeholder="Tytuł" required>
            <textarea style="height: 200px; min-height: 50px" name="description" class="inText" id="" placeholder="Opis" required></textarea>
            <input name="id" type="hidden" value="{{ $action['id'] }}">
            <input type="submit" class="submit" value="Dodaj">
        </form>
    </div>
    <h1>Lista osób, która bierze udział w wydarzeniu:</h1>
    <p>
        @foreach ($list as $item)
            {{$item['content']}}, 
        @endforeach
    </p>
    <p style="font-size: 12px">*Lista jest sformatowana tak, żeby można było wysłać korespondencję seryjną</p>
@endsection