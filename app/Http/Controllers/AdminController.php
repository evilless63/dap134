<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Document;
use App\Message;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::check()){

            $documents = Document::all(); 
            $posts = Post::all();
            $messages = Message::all();

            return view('admin.home', compact('documents', 'posts','messages'));
            
        } else {
            return abort(404);
        } 
    }

}
