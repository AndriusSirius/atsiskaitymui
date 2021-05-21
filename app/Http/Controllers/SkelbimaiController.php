<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skelbimai;
use Illuminate\Support\Facades\Auth;

class SkelbimaiController extends Controller
{
    public function index()
    {
        $posts = Skelbimai::with('users')->paginate(20);
        $postai = Skelbimai::with('users')->where('user_id', Auth::id())->paginate(20);
        return view('skelbimai.skelbimai', compact('posts', 'postai'));
    }
}
