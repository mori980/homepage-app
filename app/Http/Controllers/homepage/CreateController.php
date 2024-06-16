<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Http\Requests\homepage\CreateRequest;

class CreateController extends Controller
{
    public function __invoke(CreateRequest $request)
    {
        $tweet = new Tweet;
        $tweet->content = $request->tweet();
        $tweet->save();
        return redirect()->route('homepage.create');
    }
}
 