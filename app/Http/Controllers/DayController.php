<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $game = \App\Game::find($request->session()->get('game_id'));

        if ($request->input('yesterday')) {
            $yesterday = $request->input('yesterday');
        }
        else {
            $yesterday = 0;
        }


        // Is there time left in the game?
        if ($yesterday < $game->last_day) {
            // Yes - make a new day            
            $day = new \App\Day;
            $day->day = $yesterday + 1;
            $day->game_id = $game->id;           
            $condition = \App\Condition::random_condition();
            $day->condition_id = $condition->id;
            $day->temperature = $condition->random_temperature();
            $day->save();

            $dayResources1 = new \App\Resource_Day;
            $dayResources2 = new \App\Resource_Day;
            $dayResources3 = new \App\Resource_Day;
            $dayResources4 = new \App\Resource_Day;
            $dayResources5 = new \App\Resource_Day;
            
            
            $dayResources1->resource_id = 1;
            $dayResources2->resource_id = 2;
            $dayResources3->resource_id = 3;
            $dayResources4->resource_id = 4;
            $dayResources5->resource_id = 5;

            $dayResources1->day_id = $day->id;
            $dayResources2->day_id = $day->id;
            $dayResources3->day_id = $day->id;
            $dayResources4->day_id = $day->id;
            $dayResources5->day_id = $day->id;


            // if ($yesterday === 0) {
                $dayResources1->starting_quantity = 0;
                $dayResources2->starting_quantity = 0;
                $dayResources3->starting_quantity = 0;
                $dayResources4->starting_quantity = 0;
                $dayResources5->starting_quantity = 0;

                $dayResources1->save();
                $dayResources2->save();
                $dayResources3->save();
                $dayResources4->save();
                $dayResources5->save();
            // }




            return redirect('/days/' . $day->id);
        }
        else {
            // No - close this game
            $game->is_done = true;
            $game->save();
        }

        return redirect('/home');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //$resources = \App\Resource_Day::where('day_id', $id)->get();

        $resources = DB::table('resources_days')
            ->join('resources', 'resources_days.resource_id', '=', 'resources.id')
            ->select('resources_days.*', 'resources.name as name')
            ->where('day_id',$id)
            ->get();

        $day = \App\Day::find($id);

        return view('days.edit', compact('day', 'resources'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
