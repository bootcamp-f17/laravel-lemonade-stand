@extends('layouts.app-panel')

@section('title')
  Game {{ $day->game_id }}, Day {{ $day->day }}
@endsection


@section('content')

<form method="get" action="/days/create">
  <p><strong>Condition:</strong> {{ $day->condition->name }}</p>
  <p><strong>Temperature:</strong> {{ $day->temperature }}</p>

  <table>
  	<tr>
  		<th>Resource</th>
  		<th>Cost</th>
  		<th>Servings</th>
  	</tr>

  	@foreach($resources as $resource)
  		<tr>
  			<td>{{ $resource->name }}</td>
  			<td>{{ $resource->cost }}</td>
  			<td>{{ $resource->servings }}</td>
  		</tr>

  	@endforeach
  </table>


  <input type="hidden" name="yesterday" value="{{ $day->day }}">
  <button class="btn btn-sm btn-default" type="submit">New Day</button>
</form>

@endsection