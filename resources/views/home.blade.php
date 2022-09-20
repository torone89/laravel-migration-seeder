@extends('layouts.main')


@section('main-content')
    <div class="card" style="width: 18rem;">
        @foreach ($trains as $traininfo)
            <div class="card-header">
                Nome azienda: {{ $traininfo['azienda'] }}
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Stazione di partenza: {{ $traininfo['stazione_di_partenza'] }}</li>
                <li class="list-group-item">Stazione di arrivo: {{ $traininfo['stazione_di_arrivo'] }}</li>
                <li class="list-group-item"> Orario di partenza: {{ $traininfo['orario_di_partenza'] }}</li>
                <li class="list-group-item">Orario di Arrivo: {{ $traininfo['orario_di_arrivo'] }}</li>
                <li class="list-group-item">Codice treno: {{ $traininfo['codice_treno'] }}</li>
                <li class="list-group-item">Numero carrozze: {{ $traininfo['numero_di_carozze'] }}</li>
                <li class="list-group-item">In orario: {{ $traininfo['in_orario'] }}</li>

            </ul>
        @endforeach
    </div>
    <ul>
        <li>
            <h1>

            </h1>
        </li>
        <li>

        </li>
        <li>
            Stazione di arrivo: {{ $traininfo['stazione_di_arrivo'] }}
        </li>
        <li>
            Orario di partenza: {{ $traininfo['orario_di_partenza'] }}
        </li>
        <li>
            Orario di Arrivo: {{ $traininfo['orario_di_arrivo'] }}
        </li>
        <li>
            Codice treno: {{ $traininfo['codice_treno'] }}
        </li>
        <li>
            Numero carrozze: {{ $traininfo['numero_carrozze'] }}
        </li>
        <li>
            In orario: {{ $traininfo['in_orario'] }} //
            leggenda: 1 = in orario, 0 = non in orario
        </li>

    </ul>
@endsection
