@extends('layouts.app-panel')

@section('title')
  Game {{ $day->game_id }}, Day {{ $day->day }}
@endsection


@section('content')

<form method="get" action="/days/create">
  <p><strong>Condition:</strong> {{ $day->condition->name }}</p>
  <p><strong>Temperature:</strong> {{ $day->temperature }}</p>
  <hr>
  <h3>Resources:</h3>

  <ul>
  @foreach ($resource as $resources)

  <ul>
  	<h3>{{ $resources->name }}</h3>
  	<li> Price: {{ $resources->cost }} </li>
  	<li> Makes {{ $resources->servings }} servings </li>
  	<li> Description: {{ $resources->description }} </li>
  	<li> Expires in {{ $resources->expires_in_days }} days </li>

  </ul>

  @endforeach
  </ul>

  <input type="hidden" name="yesterday" value="{{ $day->day }}">
  <button class="btn btn-sm btn-default" type="submit">New Day</button>

</form>

@endsection