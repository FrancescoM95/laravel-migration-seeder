@extends('layouts.main')

@section('title', 'HOME')

@section('main-content')
    <section>
        <div class="container mt-5">
            <h1 class="text-center mb-4">TRAINS</h1>
            <table class="table table-success table-striped table-hover">
                <thead class="fs-5">
                    <tr>
                        @forelse ($columns as $column)
                            @if(!in_array($column, $excludeColumns))
                                <th>{{ ucwords(str_replace('_', ' ', $column)) }}</th>
                            @endif
                        @empty
                            <th></th>
                        @endforelse
                    </tr>
                </thead>
                <tbody>
                    @forelse ($trains as $train)
                    <tr class="fs-6">
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->cp }}</td>
                        <td class="text-center">{{ $train->wagons }}</td>
                        <td class="text-center">{{ $train->isInTime ? 'Yes' : 'No' }}</td>
                        <td class="text-center">{{ $train->isDeleted ? 'Yes' : 'No' }}</td>
                    </tr>
                    @empty
                        <tr>
                            <td>Non ci sono treni da visualizzare.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection