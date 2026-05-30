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

    background:#0B1120;

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

    padding:30px;

    font-size:32px;
    font-weight:bold;

    border-bottom:1px solid #1E293B;
}

.logo span{
    color:#C8A96B;
}

/* Search */

.search{

    padding:20px;
}

.search input{

    width:100%;

    background:#162033;

    border:none;

    border-radius:14px;

    padding:16px;

    color:white;

    outline:none;
}

.search input::placeholder{
    color:#94A3B8;
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

/* Top Bar */

.top-bar{

    height:90px;

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

    padding:14px 25px;

    border-radius:14px;

    font-weight:bold;

    cursor:pointer;

    transition:0.3s;
}

.match-btn:hover{

    background:#b89255;

    transform:scale(1.03);
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

    border-radius:18px;

    line-height:1.5;
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

.chat-input input{

    flex:1;

    background:#162033;

    border:none;

    border-radius:16px;

    padding:18px;

    color:white;

    outline:none;

    font-size:15px;
}

.send-btn{

    width:60px;
    height:60px;

    border:none;

    border-radius:16px;

    background:#C8A96B;

    color:#0F172A;

    cursor:pointer;

    display:flex;
    align-items:center;
    justify-content:center;

    transition:0.3s;
}

.send-btn:hover{

    background:#b89255;

    transform:scale(1.05);
}

/* Responsive */

@media(max-width:768px){

    .sidebar{
        display:none;
    }

}

</style>

</head>

<body>

<div class="chat-layout">

    <!-- Sidebar -->

    <div class="sidebar">

        <div class="logo">
            Room<span>Match</span>
        </div>

        <div class="search">

            <input
                type="text"
                placeholder="Cari chat...">

        </div>

        <div class="chat-list">

            @foreach($contacts as $contact)

                <a
                    href="/chat/{{ $contact->id }}"
                    class="chat-item {{ $receiver->id == $contact->id ? 'active' : '' }}">

                    <img
                        src="{{ asset($contact->gambar) }}"
                        class="avatar">

                    <div class="chat-info">

                        <h4>
                            {{ $contact->judul }}
                        </h4>

                        <p>
                            {{ $contact->lokasi }}
                        </p>

                    </div>

                </a>

            @endforeach

        </div>

    </div>

    <!-- Main Chat -->

    <div class="main-chat">

        <!-- Top -->

        <div class="top-bar">

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

            <button class="match-btn">
                Match
            </button>

        </div>

        <!-- Chat Body -->

        <div class="chat-body">

            @foreach($messages as $message)

                <div class="message {{ $message->sender_id == Auth::id() ? 'sender' : 'receiver' }}">

                    {{ $message->message }}

                </div>

            @endforeach

        </div>

        <!-- Input -->

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

                <svg xmlns="http://www.w3.org/2000/svg"
                    width="22"
                    height="22"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24">

                    <line x1="22" y1="2" x2="11" y2="13"></line>

                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>

                </svg>

            </button>

        </form>

    </div>

</div>

</body>
</html>