@extends('layouts.app-panel')

@section('title')
  Game {{ $day->game_id }}, Day {{ $day->day }}
@endsection


@section('content')

<form method="get" action="/days/create">
  <p><strong>Condition:</strong> {{ $day->condition->name }}</p>
  <p><strong>Temperature:</strong> {{ $day->temperature }}</p>
  <input type="hidden" name="yesterday" value="{{ $day->day }}">
  
<table>
	<thead>
		<th>Resource</th>
		<th>Starting Quantity</th>
		<th>Purchased Quantity</th>
		<th>Ending Quantity</th>
	</thead>
	
	  @foreach ($resources as $resource)
	  <tbody>
	  <td>{{ $resource->name }}</td>
	  <td>{{ $resource->starting_quantity }}</td>
	  <td>{{ $resource->purchased_quantity }}</td>
	  <td>{{ $resource->ending_quantity }}</td>
	  </tbody>
	  @endforeach 
	
</table>

  <button class="btn btn-sm btn-default" type="submit">New Day</button>
</form>



@endsection