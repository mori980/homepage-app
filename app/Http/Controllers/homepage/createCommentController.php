<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comment;

class createCommentController extends Controller
{
    public function __invoke(Request $request)
    {
        $comment = new comment;
        $comment -> content = $request -> comment;
        $comment -> tweet_id = $request -> tweet_id;
        $comment -> name = $request -> name;
        $comment -> save();
        return redirect()->route('homepage');
    }
}
