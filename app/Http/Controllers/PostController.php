<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('is_active', '1')->get();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $post = new Post();

        if($request->hasfile('image_path')) {
            $file = $request->image_path;
            $image_path = time().$file->getClientOriginalName();
            $file->move(public_path().'/posts_files/', $image_path);
            $post->image_path = $image_path;
        } else {
            $post->image_path = "";
        }
        
        $post->title = $request->title;
        $post->description = $request->description;
        // $post->description_preview = mb_strimwidth(strip_tags($post->description), 0, 30, "...");
        $post->is_active = 1;

        $post->save();

        $request->session()->flash('alert-success', 'Информация успешно добавлена !');
        return redirect('/admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findorfail($id);
        return view('post.single', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findorfail($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findorfail($id);

        if($request->hasfile('image_path')) {
            $file = $request->image_path;
            $image_path = time().$file->getClientOriginalName();
            $file->move(public_path().'/posts_files/', $image_path);
            $post->image_path = $image_path;
        }

        if ($request->has('title'))
        {
            $post->title = $request->get('title');
        }

        if ($request->has('description'))
        {
            $post->description = $request->get('description');
        }

        

        if ($request->has('is_active'))
        {
            $post->is_active = $request->get('is_active');
        }

        $post->save();

        Session::flash('alert-success', 'Информация успешно обновлена !');
        return redirect('/admin/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findorfail($id);
        $destinationPath = '/posts_files/';

        if($post->image_path <> "") {
            unlink(public_path('/posts_files/'.$post->image_path));
        }

        $post->delete();
        

        Session::flash('alert-success', 'Информация успешно удалена !');
        return redirect('/admin/home');
    }
}
