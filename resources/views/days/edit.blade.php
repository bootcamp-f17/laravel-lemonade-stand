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

  	@foreach($resource as $resources)
  		<tr>
  			<td>{{ $resources->name }}</td>
  			<td>{{ $resources->cost }}</td>
  			<td>{{ $resources->servings }}</td>
  		</tr>

  	@endforeach
  </table>


  <input type="hidden" name="yesterday" value="{{ $day->day }}">
  <button class="btn btn-sm btn-default" type="submit">New Day</button>
</form>

@endsection