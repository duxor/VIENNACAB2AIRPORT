@extends('mastera')
@section('body')
    <h1 class="text-center">AdminPanel</h1>
    <hr>
    <div class="col-sm-10">
        <h2 class="text-center">Danasnje voznje</h2>
        <hr>
        @if(count($rezervacije['danas']))
            @foreach($rezervacije['danas'] as $r)
                <div class="col-sm-12 voznje">
                    <div class="col-sm-3">
                        {{$r->pravac==1?'Ka A':'Od A'}}<br>
                        {{date('d.m.Y. H:i',strtotime($r->vrijeme))}}
                    </div>
                    <div class="col-sm-3">
                        {{$r->region}} {{$r->kvart}} {{$r->kvart_number}} {{$r->ulica}}
                    </div>
                    <div class="col-sm-3">
                        {{$r->ime}}<br>
                        <a href="call:{{$r->telefon}}" class="btn btn-info" title="Pozovi">Pozovi {{$r->telefon}}</a><br>
                        <a href="mailto:{{$r->email}}" class="btn btn-primary" title="Posalji mejl">Posalji mejl</a><br>
                    </div>
                    <div class="col-sm-3">
                        {{$r->ime}}<br>
                        <a href="call:{{$r->telefon}}" class="btn btn-info" title="Pozovi">Pozovi {{$r->telefon}}</a><br>
                        <a href="mailto:{{$r->email}}" class="btn btn-primary" title="Posalji mejl">Posalji mejl</a><br>
                    </div>
                </div>
                <br clear="all">
                <hr>
            @endforeach
        @else
            <p class="text-center">Za danas nije planirana ni jedna vožnja!</p>
        @endif
        <h2 class="text-center">Sutrasnje voznje</h2>
        <hr>
        @if(count($rezervacije['sutra']))
            @foreach($rezervacije['sutra'] as $r)
                <div class="col-sm-12 voznje">
                    <div class="col-sm-3">
                        {{$r->pravac==1?'Ka A':'Od A'}}<br>
                        {{date('d.m.Y. H:i',strtotime($r->vrijeme))}}
                    </div>
                    <div class="col-sm-3">
                        {{$r->region}} {{$r->kvart}} {{$r->kvart_number}} {{$r->ulica}}
                    </div>
                    <div class="col-sm-3">
                        {{$r->ime}}<br>
                        <a href="call:{{$r->telefon}}" class="btn btn-info" title="Pozovi">Pozovi {{$r->telefon}}</a><br>
                        <a href="mailto:{{$r->email}}" class="btn btn-primary" title="Posalji mejl">Posalji mejl</a><br>
                    </div>
                </div>
                <br clear="all">
                <hr>
            @endforeach
        @else
            <p class="text-center">Za sutra nije planirana ni jedna vožnja!</p>
        @endif
    </div>
    <div class="col-sm-2>
        <h2>Statistika</h2>
        <p>statistika---</p>
        <h2>Racun</h2>
        <p>Forma za izradu</p>
    </div>
@endsection