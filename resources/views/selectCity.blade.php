@extends('layouts.main')

@section('title', 'Wybierz miasto')

@section('content')
    <h1 class="title">Wybierz mia<span class="green">sto</span>!</h1>

    <div class="list">
        @foreach ($cities as $item)
            <a href="/akcje/{{$item['id']}}">
                <div class="element">
                    <div class="foto" style="background-image: url('{{ $item['photo'] }}')"></div>
                    <div style="height: 18%; display: flex; align-items: center;">
                        <div class="name" style="width: 100%; text-align: center">{{ $item['name'] }}</div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

@endsection