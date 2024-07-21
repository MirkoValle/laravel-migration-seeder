@extends('layouts.app')

@section('page-title', 'Trains')

@section('head-cdn')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
@endsection

@section('main-content')
<section>

    @foreach ($trains as $train)
        <article>
                <span>{{$train->Azienda}}</span>
                <span>{{$train->Codice_treno}}</span><br>
                <span>{{$train->Stazione_di_partenza}}</span>
                <span>{{$train->Stazione_di_arrivo}}</span><br>
                <span>{{$train->Orario_di_partenza}}</span>
                <span>{{$train->Orario_di_arrivo}}</span><br>
                <span>{{$train->In_orario == 0 ? 'In ritardo' : 'In orario' }}</span>
                <span>{{$train->Cancellato == 1 ? ' CANCELLATO' : null }}</span>
        </article>
    @endforeach
</section>

<h1>In onore dei bruttisimi ma iconici tabelloni che abbiamo in Italia</h1>
@endsection
