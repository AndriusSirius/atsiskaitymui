<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skelbimai;

class SkelbimaiController extends Controller
{
    public function index()
    {
        $posts = Skelbimai::with('users')->paginate(20);
        return view('skelbimai.skelbimai', compact('posts'));
    }
}
