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


  <div class="panel panel-default">
  <div class="panel-heading">Lemonade Store</div>
  <table class="table">
    <thead>
  	<tr>
  		<th>Name</th>
  		<th>Description</th>
  		<th>Last (days)</th>
  		<th>Servings</th>
  		<th>Cost</th>
  		<th>Button</th>
  	</tr>
  </thead>		

  @foreach ($resource as $resources)

  	<tbody>
     <thead>
      <tr>
      	<td>{{ $resources->name }}</td>
        <td>{{ $resources->description }}</td>
        <td>{{ $resources->expires_in_days }}</td>        
        <td>{{ $resources->servings }}</td>
        <td>{{ $resources->cost }}</td>
        <td><button>Buy</button></td>
      </tr>
   </tbody> 
     @endforeach   
  </table>
</div>



 

  <input type="hidden" name="yesterday" value="{{ $day->day }}">
  <button class="btn btn-sm btn-default" type="submit">New Day</button>

</form>

@endsection