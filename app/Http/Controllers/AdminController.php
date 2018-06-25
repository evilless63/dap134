<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Document;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::check()){

            $documents = Document::all(); 
            $posts = Post::all();

            return view('admin.home', compact('documents', 'posts'));
            
        } else {
            return abort(404);
        } 
    }

}
