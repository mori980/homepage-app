<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Models\comment;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $tweets = Tweet::all();
        $comments = comment::all();
        $tweet_num = $tweets->count();
        $comment_count = array_fill(0,$tweet_num+1,0);
        foreach($comments as $comment)
        {
            $comment_count[$comment->tweet_id]++;
        }
        
        return view('homepage.index',['tweets'=>$tweets,'comments'=>$comments,'comment_count'=>$comment_count]);
    }

}
