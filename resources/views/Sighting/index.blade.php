@extends('app')

@section('content')
    <h1>Audobon Sighting History</h1>

    <div class="table-responsive">
        <table class ="table">
            <thead>
            <tr>
                <th>Species</th>
                <th>Description</th>
                <th>Location</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($sightings as $sighting)
                <tr>
                    <td>{{$sighting->getBird()->getSpecies()}}</td>
                    <td>{{$sighting->getBird()->getDescription()}}</td>
                    <td>{{$sighting->getLocation()}}</td>
                    <td>{{$sighting->getDate()}}</td>
                    <td>{{$sighting->getTime()}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="http://audobon.local/create", class="btn btn-primary">Create New Sighting</a>
@stop