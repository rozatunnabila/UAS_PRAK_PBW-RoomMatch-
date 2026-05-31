<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>RoomMatch Chat</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    background:#081120;

    font-family:Arial,sans-serif;

    color:white;

    height:100vh;

    overflow:hidden;
}

/* Layout */

.chat-layout{

    display:flex;

    height:100vh;
}

/* Sidebar */

.sidebar{

    width:340px;

    background:#0F172A;

    border-right:1px solid #1E293B;

    display:flex;
    flex-direction:column;
}

/* Logo */

.logo{

    padding:28px 30px;

    font-size:32px;
    font-weight:bold;

    border-bottom:1px solid #1E293B;

    text-decoration:none;

    color:white;

    display:block;

    transition:0.3s;
}

.logo:hover{

    background:#111C31;
}

.logo span{

    color:#C8A96B;
}

/* SEARCH */

.search{

    padding:20px;
}

.search-box{

    display:flex;
    align-items:center;

    gap:10px;

    background:#162033;

    border:1px solid #23314F;

    padding:14px 16px;

    border-radius:16px;
}

.search-box input{

    width:100%;

    background:transparent;

    border:none;

    outline:none;

    color:white;

    font-size:14px;
}

/* MATCH BADGE */

.match-badge{

    margin:0 20px 18px;

    background:#C8A96B;

    color:#0F172A;

    padding:12px 16px;

    border-radius:14px;

    font-weight:700;

    font-size:14px;
}

/* Chat List */

.chat-list{

    flex:1;

    overflow-y:auto;

    padding:10px;
}

/* Chat Item */

.chat-item{

    display:flex;
    align-items:center;

    gap:15px;

    padding:15px;

    border-radius:18px;

    cursor:pointer;

    transition:0.3s;

    margin-bottom:10px;

    text-decoration:none;
}

.chat-item:hover{

    background:#162033;
}

.chat-item.active{

    background:#162033;

    border:1px solid #23314F;
}

/* Avatar */

.avatar{

    width:60px;
    height:60px;

    border-radius:50%;

    object-fit:cover;

    border:2px solid #1E293B;
}

/* Chat Info */

.chat-info{

    flex:1;
}

.chat-info h4{

    margin-bottom:6px;

    font-size:17px;

    color:white;
}

.chat-info p{

    color:#94A3B8;

    font-size:14px;
}

/* Main Chat */

.main-chat{

    flex:1;

    display:flex;
    flex-direction:column;
}

/* Top Left */

.top-left{

    display:flex;
    align-items:center;

    gap:20px;
}

/* BACK BUTTON */

.back-btn{

    display:flex;
    align-items:center;
    gap:6px;

    color:#C8A96B;

    text-decoration:none;

    font-size:14px;
    font-weight:500;
}

/* Top Bar */

.top-bar{

    min-height:90px;

    background:#0F172A;

    border-bottom:1px solid #1E293B;

    padding:0 30px;

    display:flex;
    align-items:center;
    justify-content:space-between;
}

/* User */

.chat-user{

    display:flex;
    align-items:center;

    gap:15px;
}

.chat-user img{

    width:55px;
    height:55px;

    border-radius:50%;

    object-fit:cover;
}

.chat-user h3{

    margin-bottom:5px;

    font-size:26px;
}

.chat-user p{

    color:#94A3B8;

    font-size:14px;
}

/* Match Button */

.match-btn{

    background:#C8A96B;

    color:#0F172A;

    border:none;

    padding:14px 28px;

    border-radius:16px;

    font-weight:bold;

    cursor:pointer;
}

/* MATCH NOTIFICATION */

.match-notification{

    margin:20px 30px 0;

    background:#162033;

    border:1px solid #23314F;

    border-radius:22px;

    padding:20px;

    display:flex;

    justify-content:space-between;

    align-items:center;
}

/* ACTIONS */

.match-actions{

    display:flex;

    gap:10px;
}

/* ACCEPT */

.accept-btn{

    background:#C8A96B;

    color:#0F172A;

    border:none;

    padding:12px 20px;

    border-radius:12px;

    font-weight:bold;

    cursor:pointer;
}

/* REJECT */

.reject-btn{

    background:#1E293B;

    color:white;

    border:none;

    padding:12px 20px;

    border-radius:12px;

    cursor:pointer;
}

/* Chat Body */

.chat-body{

    flex:1;

    padding:30px;

    overflow-y:auto;

    display:flex;
    flex-direction:column;

    gap:18px;
}

/* Message */

.message{

    max-width:420px;

    padding:16px 18px;

    border-radius:20px;

    line-height:1.5;

    font-size:15px;
}

/* Sender */

.sender{

    background:#C8A96B;

    color:#0F172A;

    align-self:flex-end;

    border-bottom-right-radius:5px;
}

/* Receiver */

.receiver{

    background:#162033;

    color:white;

    border-bottom-left-radius:5px;
}

/* Input Area */

.chat-input{

    background:#0F172A;

    border-top:1px solid #1E293B;

    padding:20px;

    display:flex;
    align-items:center;

    gap:15px;
}

/* Input */

.chat-input input{

    flex:1;

    background:#162033;

    border:none;

    border-radius:18px;

    padding:18px;

    color:white;

    outline:none;

    font-size:15px;
}

/* Send Button */

.send-btn{

    width:60px;
    height:60px;

    border:none;

    border-radius:18px;

    background:#C8A96B;

    color:#0F172A;

    cursor:pointer;
}

/* POPUP */

.popup-overlay{

    position:fixed;

    top:0;
    left:0;

    width:100%;
    height:100%;

    background:rgba(0,0,0,0.65);

    display:flex;
    align-items:center;
    justify-content:center;

    opacity:0;
    visibility:hidden;

    transition:0.3s;

    z-index:999;
}

.popup-overlay.active{

    opacity:1;
    visibility:visible;
}

.popup-box{

    width:420px;

    background:#0F172A;

    border:1px solid #23314F;

    border-radius:28px;

    padding:35px;

    text-align:center;
}

.popup-icon{

    width:80px;
    height:80px;

    margin:auto;
    margin-bottom:20px;

    border-radius:50%;

    background:rgba(200,169,107,0.12);

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:34px;
}

.popup-buttons{

    display:flex;

    gap:15px;
}

.cancel-btn{

    flex:1;

    height:55px;

    border:none;

    border-radius:16px;

    background:#162033;

    color:white;

    cursor:pointer;
}

.confirm-btn{

    flex:1;

    height:55px;

    border:none;

    border-radius:16px;

    background:#C8A96B;

    color:#0F172A;

    font-weight:bold;

    cursor:pointer;
}

</style>

</head>

<body>

<div class="chat-layout">

    <!-- Sidebar -->

    <div class="sidebar">

        <a href="/dashboard" class="logo">

            Room<span>Match</span>

        </a>

        <div class="search">

            <div class="search-box">

                <input
                    type="text"
                    id="searchChat"
                    placeholder="Cari chat...">

            </div>

        </div>

        @if($matchRequests->count() > 0)

        <div class="match-badge">

            🔔 {{ $matchRequests->count() }}
            Match Request

        </div>

        @endif

        <!-- CHAT LIST -->

        <div class="chat-list">

            @foreach($contacts as $contact)

                @php

                    $contactIklan = \App\Models\Iklan::where(

                            'user_id',
                            $contact->id

                        )

                        ->first();

                @endphp

                @if($contactIklan)

                <a
                    href="/chat/{{ $contactIklan->id }}"
                    class="chat-item {{ $receiver->user_id == $contact->id ? 'active' : '' }}">

                    <img
                        src="{{ asset($contactIklan->gambar) }}"
                        class="avatar">
                    
                    @php

    $unreadCount = \App\Models\Chat::where(

            'sender_id',
            $contact->id

        )

        ->where(

            'receiver_id',
            Auth::id()

        )

        ->where(

            'is_read',
            false

        )

        ->count();

@endphp
                    <div class="chat-info">

                        <h4>

                            {{ $contact->name }}

                        </h4>

                        <div style="
    display:flex;
    align-items:center;
    justify-content:space-between;
">

    <p>

        {{ $contactIklan->lokasi }}

    </p>

    @if($unreadCount > 0)

    <span style="
        background:#C8A96B;
        color:#0F172A;

        min-width:22px;
        height:22px;

        border-radius:50%;

        display:flex;
        align-items:center;
        justify-content:center;

        font-size:12px;
        font-weight:bold;

        padding:0 6px;
    ">

        {{ $unreadCount }}

    </span>

    @endif

</div>

                    @php

    $unreadCount = \App\Models\Chat::where(

            'sender_id',
            $contact->id

        )

        ->where(

            'receiver_id',
            Auth::id()

        )

        ->where(

            'is_read',
            false

        )

        ->count();

@endphp
                    </div>

                </a>

                @endif

            @endforeach

        </div>

    </div>

    <!-- Main Chat -->

    <div class="main-chat">

        <div class="top-bar">

            <div class="top-left">

                <a href="/dashboard" class="back-btn">

                    ← Kembali

                </a>

                <div class="chat-user">

                    <img src="{{ asset($receiver->gambar) }}">

                    <div>

                        <h3>
                            {{ $receiver->judul }}
                        </h3>

                        <p>
                            Active now
                        </p>

                    </div>

                </div>

            </div>

            @if($currentMatch && $currentMatch->status == 'pending')

            <button class="match-btn" disabled>

                Menunggu Persetujuan

            </button>

            @elseif($currentMatch && $currentMatch->status == 'accepted')

            <button class="match-btn" disabled>

                Sudah Match

            </button>

            @else

            <button
                class="match-btn"
                onclick="openMatchPopup()">

                Match

            </button>

            @endif

        </div>

        @if($pendingMatch)

        <div class="match-notification">

            <div>

                <h4>

                    🤝 Match Request

                </h4>

                <p>

                    {{ $receiver->judul }}
                    ingin match dengan kamu

                </p>

            </div>

            <div class="match-actions">

                <form
                    action="/match/accept/{{ $pendingMatch->id }}"
                    method="POST">

                    @csrf

                    <button class="accept-btn">

                        Terima

                    </button>

                </form>

                <form
                    action="/match/reject/{{ $pendingMatch->id }}"
                    method="POST">

                    @csrf

                    <button class="reject-btn">

                        Tolak

                    </button>

                </form>

            </div>

        </div>

        @endif

        <!-- CHAT BODY -->

        <div class="chat-body">

            @foreach($messages as $message)

                <div class="message {{ $message->sender_id == Auth::id() ? 'sender' : 'receiver' }}">

                    {{ $message->message }}

                </div>

            @endforeach

        </div>

        <!-- INPUT -->

        <form
            action="/chat/send/{{ $receiver->id }}"
            method="POST"
            class="chat-input">

            @csrf

            <input
                type="text"
                name="message"
                placeholder="Ketik pesan..."
                required>

            <button class="send-btn">

                ➤

            </button>

        </form>

    </div>

</div>

<!-- MATCH POPUP -->

<div class="popup-overlay" id="matchPopup">

    <div class="popup-box">

        <div class="popup-icon">

            🤝

        </div>

        <h2>
            Yakin ingin match?
        </h2>

        <p>

            Jika kalian sama-sama setuju,
            roommate akan otomatis terhubung.

        </p>

        <div class="popup-buttons">

            <button
                class="cancel-btn"
                onclick="closeMatchPopup()">

                Tidak

            </button>

            <form
                action="/match/{{ $receiver->id }}"
                method="POST"
                style="flex:1;">

                @csrf

                <button
                    type="submit"
                    class="confirm-btn">

                    Ya, Match

                </button>

            </form>

        </div>

    </div>

</div>

<script>

const searchInput = document.getElementById('searchChat');

searchInput.addEventListener('keyup', function(){

    let keyword = this.value.toLowerCase();

    let contacts = document.querySelectorAll('.chat-item');

    contacts.forEach(contact => {

        let text = contact.innerText.toLowerCase();

        if(text.includes(keyword)){

            contact.style.display = 'flex';

        }else{

            contact.style.display = 'none';

        }

    });

});

function openMatchPopup(){

    document
        .getElementById('matchPopup')
        .classList
        .add('active');
}

function closeMatchPopup(){

    document
        .getElementById('matchPopup')
        .classList
        .remove('active');
}

</script>

</body>
</html>