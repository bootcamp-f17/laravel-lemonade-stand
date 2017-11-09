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

// return '[' . $request->session()->get('yesterday') . ']';

        $yesterday = 0;
        if ($request->session()->get('yesterday')) {
            $yesterday = $request->session()->get('yesterday');
        }

        // Is there time left in the game?
        if ($yesterday < $game->last_day) {
            // Yes - make a new day
            $day = new \App\Day;
            $day->day = $yesterday + 1;
            $day->game_id = $game->id;

            if ($day->day === 1) {
                $day->starting_balance = $game->starting_balance;
            }
            else {
                // This reads weird, but it's okay
                $day->starting_balance = $game->current_day()->ending_balance;
            }
            
            $condition = \App\Condition::random_condition();

            $day->condition_id = $condition->id;
            $day->temperature = $condition->random_temperature();

            $day->save();
            return redirect('/days/' . $day->id);
        }
        else {
            // No - close this game
            $request->session()->put('yesterday', 0);
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
        $resources = \DB::table('resources')
                ->orderBy('name', 'asc')
                ->get();
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
        $day = \App\Day::find($id);

        // We're about to do a bunch of calculations.
        // Start by copying starting_balance to ending_balance.
        $day->ending_balance = $day->starting_balance;

        // TODO: better sanity check on price
        $day->price = $request->input('resourcePrice') ? $request->input('resourcePrice') : '0.00';
        if ($day->price < 0) { $day->price = '0.00'; }
        if ($day->price > 2.5) { $day->price = '2.50'; }


        // TODO: we need to figure out what was spent on resources
        $lemons = \App\Resource::where('name', '=', 'Lemons')->first();
        $today_lemons = $request->input('resourceLemons') ? $request->input('resourceLemons') : 0;

error_log($request->input('resourceLemons'));
error_log($today_lemons);

error_log($lemons->cost);

        if ($today_lemons < 0) {
            $today_lemons = 0;
error_log("Can't buy negative lemons, you stinker!");
        }


        if ( ($today_lemons * $lemons->cost) > $day->starting_balance) {
            $today_lemons = floor($day->starting_balance / $lemons->cost);
error_log("Trying to buy too many lemons!");
error_log("New amount is " . $today_lemons);
        }




        // TODO: Add lemons to today in day_resource




        // Deduct cost from balance
        $day->ending_balance = $day->ending_balance - ($today_lemons * $lemons->cost);








        // TODO: we need to figure out what we earned by selling lemonade
        $day->cups_sold = $this->_random_cups_sold();

        $day->ending_balance = $day->ending_balance + ($day->cups_sold * $day->price);

        $day->save();
        $request->session()->put('yesterday', $day->day);

        // TODO: tell the user what happened during today's sale
        return view('days.summary', compact('day'));

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



    private function _random_cups_sold() {

        // TODO: there really should be something random about this number

        return 12;

    }

}
