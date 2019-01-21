<?php

namespace App\Http\Controllers\Backend;

use App\Models\Auth\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Messenger;

class MessagesController extends Controller
{
    public function index(Request $request){
        $thread="";
        $teachers = User::whereHas('roles', function ($q) { $q->where('role_id', 2); } )->get()->pluck('name', 'id');
        auth()->user()->load('threads.messages.sender');
       if(request()->has('thread')){

           $thread = auth()->user()->threads()
               ->where('message_threads.id','=',$request->thread)
               ->first();

           //Read Thread
           auth()->user()->markThreadAsRead($thread->id);
           if($thread == ""){
               abort(404);
           }
       }

        return view('backend.messages.index', [
            'threads' => auth()->user()->threads,
            'teachers' => $teachers,
            'thread' => $thread
        ]);
    }

    public function send(Request $request){
        $this->validate($request,[
           'recipients' => 'required',
           'message' => 'required'
        ],[
           'recipients.required' => 'Please select at least one recipient',
           'message.required' => 'Please input your message'
        ]);

        $message = Messenger::from(auth()->user())->to($request->recipients)->message($request->message)->send();
        return redirect(route('admin.messages').'?thread='.$message->thread_id);
    }

    public function reply(Request $request){
        $this->validate($request,[
            'message' => 'required'
        ],[
            'message.required' => 'Please input your message'
        ]);

        $thread = auth()->user()->threads()
            ->where('message_threads.id','=',$request->thread_id)
            ->first();
        $message = Messenger::from(auth()->user())->to($thread)->message($request->message)->send();

        return redirect(route('admin.messages').'?thread='.$message->thread_id)->withFlashSuccess('Message sent successfully');
    }
}
