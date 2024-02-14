@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Train</h1>
    <ul>
        @foreach ($treni as $train)

        <li>
            <b>
                {{ $train -> codice_treno }}:
            </b>
             {{ $train -> orario_partenza }}
             {{ $train -> orario_arrivo }}
        </li>
        @endforeach
    </ul>
@endsection
