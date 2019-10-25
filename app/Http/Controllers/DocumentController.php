<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use Session;
use File;
use Mail;
use App\Message;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category = 0)
    {
        if($category <> 0) {
            $documents = Document::where('is_active', '1')->where('category', $category)->orderBy('created_at', 'desc')->get();     
        } else {
            $documents = Document::where('is_active', '1')->orderBy('created_at', 'desc')->get();
        }
        
        return view('site.informacionnye-soobshcheniya', compact('documents', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasfile('file_path')) {
            $file = $request->file_path;
            $file_path = time().$file->getClientOriginalName();
            $file->move(public_path().'/document_files/', $file_path);
        }

        $document = new Document();
        $document->file_path = $file_path;
        $document->title = $request->title;
        $document->is_active = 1;
        $document->category = $request->category;

        $document->save();

        $request->session()->flash('alert-success', 'Информация успешно добавлена !');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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

        $document = Document::findorfail($id);

        if($request->hasfile('file_path')) {
            $file = $request->file_path;
            $file_path = time().$file->getClientOriginalName();
            $file->move(public_path().'/document_files/', $file_path);
            $document->file_path = $file_path;
        }

        if ($request->has('title'))
        {
            $document->title = $request->get('title');
        }

        if ($request->has('is_active'))
        {
            $document->is_active = $request->get('is_active');
        }

        if ($request->has('category'))
        {
            $document->category = $request->get('category');
        }

        $document->save();

        Session::flash('alert-success', 'Информация успешно обновлена !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = Document::findorfail($id);
        $destinationPath = '/document_files/';

        unlink(public_path('/document_files/'.$document->file_path));

        $document->delete();
        

        Session::flash('alert-success', 'Информация успешно удалена !');
        return redirect()->back();
            
    }

    public function updatelist(Request $request)
    {

        if($request->hasfile('file_list')) {
            $file = $request->file_list;
            $file_list = $file->getClientOriginalName();
            $file->move(public_path().'/document_files/list/', $file_list);

        Session::flash('alert-success', 'Список успешно обновлен !');
        return redirect()->back();
        } 
    }

}
