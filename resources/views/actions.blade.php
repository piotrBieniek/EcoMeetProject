@extends('layouts.main')

@section('title', 'Akcje w twoim mieście')

@section('content')
    <h1 class="title"><span class="green">EKO</span> Akcje w mieście <span class="green">{{ $cityName }}</span></h1>

    <div class="listEco">
        @foreach ($actions as $item)
            <a href="/akcje/zobacz/{{$item['id']}}">
                <div class="element">
                    <div class="foto" style="background-image: url('{{ $item['photo'] }}')"></div>
                    <div style="height: 28%; display: flex; align-items: center;">
                        <div class="name" style="width: 100%; text-align: center">
                            <p>{{ $item['title'] }}</p>
                            <p class="small">{{ $item['time'] }}</p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

@endsection