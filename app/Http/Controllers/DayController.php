<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

            $resource = \App\Resource::getResource();

            // return $resource;

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
        $day = \App\Day::find($id);
        return view('days.edit', compact('day'));
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
