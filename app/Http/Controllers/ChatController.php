<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Chat;
use App\Models\Iklan;

use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | HALAMAN CHAT
    |--------------------------------------------------------------------------
    */

    public function index($id)
    {

        /*
        |--------------------------------------------------------------------------
        | AMBIL IKLAN YANG DIKLIK
        |--------------------------------------------------------------------------
        */

        $receiver = Iklan::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | AMBIL USER PEMILIK IKLAN
        |--------------------------------------------------------------------------
        */

        $receiverUserId = $receiver->user_id;

        /*
        |--------------------------------------------------------------------------
        | AMBIL SEMUA PESAN
        |--------------------------------------------------------------------------
        */

        $messages = Chat::where(function($query) use ($receiverUserId){

            $query->where('sender_id', Auth::id())
                  ->where('receiver_id', $receiverUserId);

        })

        ->orWhere(function($query) use ($receiverUserId){

            $query->where('sender_id', $receiverUserId)
                  ->where('receiver_id', Auth::id());

        })

        ->orderBy('created_at', 'asc')

        ->get();

        /*
        |--------------------------------------------------------------------------
        | CONTACT SIDEBAR
        |--------------------------------------------------------------------------
        */

        $contacts = Iklan::where('user_id', '!=', Auth::id())
            ->latest()
            ->get();

        /*
        |--------------------------------------------------------------------------
        | RETURN VIEW
        |--------------------------------------------------------------------------
        */

        return view('chat', compact(

            'receiver',
            'messages',
            'contacts'

        ));

    }

    /*
    |--------------------------------------------------------------------------
    | KIRIM PESAN
    |--------------------------------------------------------------------------
    */

    public function send(Request $request, $id)
    {

        /*
        |--------------------------------------------------------------------------
        | AMBIL IKLAN TUJUAN
        |--------------------------------------------------------------------------
        */

        $receiver = Iklan::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | SIMPAN PESAN
        |--------------------------------------------------------------------------
        */

        Chat::create([

            'sender_id' => Auth::id(),

            'receiver_id' => $receiver->user_id,

            'message' => $request->message

        ]);

        /*
        |--------------------------------------------------------------------------
        | KEMBALI KE CHAT
        |--------------------------------------------------------------------------
        */

        return back();

    }

}