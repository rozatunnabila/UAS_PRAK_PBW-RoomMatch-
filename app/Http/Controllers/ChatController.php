<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Chat;
use App\Models\Iklan;

use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    public function index($id)
    {

        $receiver = Iklan::findOrFail($id);

        $messages = Chat::where(function($query) use ($id){

            $query->where('sender_id', Auth::id())
                  ->where('receiver_id', $id);

        })

        ->orWhere(function($query) use ($id){

            $query->where('sender_id', $id)
                  ->where('receiver_id', Auth::id());

        })

        ->orderBy('created_at', 'asc')

        ->get();

        return view('chat', compact('receiver', 'messages'));

    }

    public function send(Request $request, $id)
    {

        Chat::create([

            'sender_id' => Auth::id(),

            'receiver_id' => $id,

            'message' => $request->message

        ]);

        return back();

    }

}