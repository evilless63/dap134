<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Document;
use App\Message;
use App\Category;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::check()){

            $documents = Document::all(); 
            $posts = Post::all();
            $messages = Message::all();

            $categories = Category::all();

            return view('admin.home', compact('documents', 'posts','messages', 'categories'));
            
        } else {
            return abort(404);
        } 
    }

}
