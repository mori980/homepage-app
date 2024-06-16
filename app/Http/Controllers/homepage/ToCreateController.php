<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToCreateController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('homepage.create');
    }
}
