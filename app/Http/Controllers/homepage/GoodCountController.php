<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;

class GoodCountController extends Controller
{
    public function __invoke(Request $request)
    {
        $tweet = Tweet::find($request -> good);
        $num = $tweet -> goodCount;
        $tweet -> update([
            "goodCount" => $num + 1,
        ]);
        $tweet -> save();
        return redirect() -> route("homepage");
    }
} 
