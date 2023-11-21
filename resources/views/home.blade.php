@extends('layouts.main')

@section('content')
    <div class="container py-5">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Agenzia</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Data e ora di partenza</th>
                    <th scope="col">Data e ora di arrivo</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->id }}</td>
                        <td>{{ $train->agency }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_date }} {{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_date }} {{ $train->departure_time }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
