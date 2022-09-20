@extends('layouts.main')


@section('main-content')
    <div class="row justify-content-center mt-5">
        @foreach ($trains as $traininfo)
            <div class="col-3 card p-0 m-2 ">
                <div class="card-header">
                    Nome azienda: {{ $traininfo['azienda'] }}
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Stazione di partenza: {{ $traininfo['stazion_di_partenza'] }}</li>
                    <li class="list-group-item">Stazione di arrivo: {{ $traininfo['stazione_di_arrivo'] }}</li>
                    <li class="list-group-item"> Orario di partenza: {{ $traininfo['orario_di_partenza'] }}</li>
                    <li class="list-group-item">Orario di Arrivo: {{ $traininfo['orario_di_arrivo'] }}</li>
                    <li class="list-group-item">Codice treno: {{ $traininfo['codice_treno'] }}</li>
                    <li class="list-group-item">Numero carrozze: {{ $traininfo['numero_di_carozze'] }}</li>
                    <li class="list-group-item">In orario: {{ $traininfo['in_orario'] }}</li>
                    <li class="list-group-item">In orario: {{ $traininfo['is_cancellato'] }}</li>

                </ul>
            </div>
        @endforeach
    @endsection
