<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Session;
use Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::findorfail($id);
        $message->delete();
        

        Session::flash('alert-success', 'Информация успешно удалена !');
        return redirect()->back();
    }

    public function sendemail(Request $request)
    {
  
        if($request->polistics = "0") {
            Session::flash('alert-danger', 'Необходимо согласиться с политикой обработки данных !');
            return redirect()->back();  
        }
        $data = array(
            'name'=> $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'text'=> $request->message
        );
        $files = $request->file('files');

        Mail::send('emails.message', $data, function ($message) use($data, $files){

            $message->from($data['email'], $data['name']);
            $message->to('vitaliy030589@gmail.com')->subject($data['subject'] . ' - ' .$data['email']);

            if(is_array($files)) {
                if(count($files) > 0) {
                    foreach($files as $file) {
                        $message->attach($file->getRealPath(), array(
                            'as' => $file->getClientOriginalName(),       
                            'mime' => $file->getMimeType())
                        );
                    }
                }
            }       

        });

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->text = $request->message;
        $message->save();

        
        Session::flash('alert-success', 'Сообщение успешно отправлено !');
        return redirect()->back();

        }
}
