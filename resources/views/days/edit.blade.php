@extends('layouts.app-panel')

@section('title')
  Game {{ $day->game_id }}, Day {{ $day->day }}
@endsection


@section('content')

<form method="get" action="/days/create">
  <p><strong>Condition:</strong> {{ $day->condition->name }}</p>
  <p><strong>Temperature:</strong> {{ $day->temperature }}</p>
  <br>
@foreach($resource as $resources)  
  <p><strong>Name:</strong> {{ $resources->name }}</p>
  <p><strong>cost:</strong> {{ $resources->cost }}</p>
  <p><strong>serving:</strong> {{ $resources->servings }}</p>
  <p><strong>description:</strong> {{ $resources->description }}</p>
  <br>
@endforeach  
  <input type="hidden" name="yesterday" value="{{ $day->day }}">
  <button class="btn btn-sm btn-default" type="submit">New Day</button>
</form>

@endsection