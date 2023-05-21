<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuessingGameController extends Controller
{
    public function index()
    {
        $number = session("number", function() {
            return rand(1, 100);
        });
        // do template variable replacement manually?
        return view('guess', ['number => $number']);
    }

    public function makeGuess(Request $request)
    {
        $guess = $request->input("guess");
        $number = $request->session()->get("number");

        if ($guess == $number) {
            session()->forget("number");
            return redirect()->route("guess.index")->with("message", "congrats!");
        } else if ($guess > $number) {
            return redirect()->route("guess.index")->with("message", "too high!");
        } else {
            return redirect()->route("guess.index")->with("message", "too low!");
        }
    }
}
