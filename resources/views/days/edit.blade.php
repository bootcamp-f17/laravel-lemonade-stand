@extends('layouts.app-panel')

@section('title')
  Game {{ $day->game_id }}, Day {{ $day->day }}
@endsection


@section('content')

<form method="get" action="/days/create">
	<h3>Weather</h3>
  	<p><strong>Condition:</strong> {{ $day->condition->name }}</p>
  	<p><strong>Temperature:</strong> {{ $day->temperature }}</p>

  <h3>Resources</h3>

  @foreach ($resource as $resources)
    <p>Name: {{ $resource->name }}, Cost: {{ $resource->cost }}, Servings: {{ $resource->servings }}, Expires in {{ $resource->expires_in_days }} days</p>
	@endforeach

  <input type="hidden" name="yesterday" value="{{ $day->day }}">
  <button class="btn btn-sm btn-default" type="submit">New Day</button>
</form>

@endsection