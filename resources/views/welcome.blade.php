@extends('layouts.app');


@section('content')
    <div class="container">
        <div class="row row-cols-4">
            @foreach ($trains as $train)
                <div class="card col g-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->company }}</h5>
                        <p class="card-subtitle mb-2 text-body-secondary">Stazione di
                            partenza:{{ $train->departure_station }}</p>
                        <p class="card-text">stazione di arrivo:{{ $train->arrival_station }}</p>
                        <a href="#" class="card-link">orario di arrivo {{ $train->arrival_time }}</a>
                        <a href="#" class="card-link">orario di partenza: {{ $train->departuretime }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
