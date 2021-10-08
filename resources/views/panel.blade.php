@extends('layouts.mainPanel')


@if ( auth()->check() )
    @section('content')

    <h1 class="title" style="margin-bottom: 18px">Cześć <span class="green">{{ auth()->user()->name }}</span>!</h1>
    <h2 style="font-weight: normal; margin-bottom: 4px" class="quote">Czy wiesz, <span class="green">że</span>?</h2>
    <p style="margin-top: 4px; font-size: 17px">{{ $quote['content'] }}</p>

    <h2 style="text-align: center; margin-top: 30px">Twoje akcje</h2>
    <div class="listEco">
        <a href="/panel/dodaj">
            <div class="element" style="background-color: #11D100">
                <div style="height: 100%; display: flex; align-items: center;">
                    <div class="name" style="width: 100%; text-align: center; font-size: 50px; color: white; font-weight: bold;">
                        +
                    </div>
                </div>
            </div>
        </a>
        @foreach ($actions as $item)
            <a href="/panel/zobacz/{{$item['id']}}">
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
@endif
    
