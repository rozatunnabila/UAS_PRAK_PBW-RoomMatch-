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
background:#EEF3E6;
linear-gradient(
135deg,
#4A001F 0%,
#650024 45%,
#2B0010 100%
);

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

    background:#F6FAF1;

    border-right:1px solid #DDE8CF;

    display:flex;
    flex-direction:column;
}

/* Logo */

.logo{

    padding:28px 30px;

    font-size:34px;

    font-weight:800;

    border-bottom:1px solid #E3ECD8;

    text-decoration:none;

    color:#355125;

    display:block;
}

.logo span{

    color:#7BAE52;
}

/* SEARCH */

.search{

    padding:20px;
}

.search-box{

    display:flex;
    align-items:center;

    gap:10px;

    background:#EDF4E4;

    border:1px solid #DDE8CF;

    padding:14px 16px;

    border-radius:18px;
}

.search-box input{

    width:100%;

    background:transparent;

    border:none;

    outline:none;

    color:#355125;

    font-size:14px;
}

/* MATCH BADGE */

.match-badge{

    margin:0 20px 18px;

    background:#E0B15C;
    color:#4A001F;

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

    border-radius:20px;

    cursor:pointer;

    transition:0.3s;

    margin-bottom:12px;

    text-decoration:none;
}

.chat-item:hover{

    background:#EDF4E4;
}

.chat-item.active{

    background:#E4F0D6;

    border:1px solid #D3E2C1;
}

/* Avatar */

.avatar{

    width:60px;
    height:60px;

    border-radius:50%;

    object-fit:cover;

    border:3px solid rgba(255,215,160,0.20);
}

/* Chat Info */

.chat-info{

    flex:1;
}

.chat-info h4{

    margin-bottom:6px;

    font-size:17px;

    color:#243220;
}

.chat-info p{

    color:#718166;

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

    color:#E0B15C;

    text-decoration:none;

    font-size:14px;
    font-weight:500;
}

/* Top Bar */

.top-bar{

    min-height:90px;

    background:rgba(255,255,255,0.72);

    backdrop-filter:blur(16px);

    border-bottom:1px solid #DDE8CF;

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

    font-size:28px;

    color:#243220;
}

.chat-user p{

    color:#7BAE52;

    font-size:14px;

    font-weight:600;
}

/* Match Button */

.match-btn{

    background:#7BAE52;

    color:white;

    border:none;

    padding:14px 30px;

    border-radius:18px;

    font-weight:bold;

    cursor:pointer;

    box-shadow:
    0 10px 24px rgba(123,174,82,0.18);
}

/* MATCH NOTIFICATION */

.match-notification{

    margin:20px 30px 0;

   background:rgba(255,255,255,0.06);

    border:1px solid rgba(255,215,160,0.12);

    backdrop-filter:blur(12px);

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

    background:#E0B15C;

    color:#0F172A;

    border:none;

    padding:12px 20px;

    border-radius:12px;

    font-weight:bold;

    cursor:pointer;
}

/* REJECT */

.reject-btn{

    background:rgba(255,255,255,0.08);

    color:white;

    border:none;

    padding:12px 20px;

    border-radius:12px;

    cursor:pointer;
}

/* Chat Body */

.chat-body{

    flex:1;

    padding:35px;

    overflow-y:auto;

    display:flex;
    flex-direction:column;

    gap:18px;

    background:#EEF3E6;
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

    background:#E0B15C;

    color:#0F172A;

    align-self:flex-end;

    border-bottom-right-radius:5px;
}

/* Receiver */

.receiver{

    background:white;

    border:1px solid #DDE8CF;

    color:#243220;

    border-bottom-left-radius:6px;

    box-shadow:
    0 8px 20px rgba(0,0,0,0.04);
}

.chat-input{

    background:rgba(255,255,255,0.78);

    backdrop-filter:blur(16px);

    border-top:1px solid #DDE8CF;

    padding:20px;

    display:flex;
    align-items:center;

    gap:15px;
}

/* Input */

.chat-input input{

    flex:1;

    background:#EDF4E4;

    border:1px solid #DDE8CF;

    border-radius:18px;

    padding:18px;

    color:#243220;

    outline:none;

    font-size:15px;
}

/* Send Button */

.send-btn{

    width:60px;
    height:60px;

    border:none;

    border-radius:18px;

    background:#7BAE52;

    color:white;

    cursor:pointer;

    box-shadow:
    0 10px 24px rgba(123,174,82,0.18);
}

/* POPUP OVERLAY */

.popup-overlay{

    position:fixed;

    inset:0;

    background:rgba(0,0,0,0.72);

    backdrop-filter:blur(4px);

    display:flex;
    align-items:center;
    justify-content:center;

    opacity:0;
    visibility:hidden;

    transition:0.3s ease;

    z-index:9999;
}

.popup-overlay.active{

    opacity:1;
    visibility:visible;
}

/* POPUP BOX */

.popup-box{

    width:470px;

    background:linear-gradient(
        180deg,
        #101B32 0%,
        #0B1425 100%
    );

    border:1px solid rgba(255,255,255,0.06);

    border-radius:34px;

    padding:45px 38px;

    text-align:center;

    box-shadow:
        0 20px 60px rgba(0,0,0,0.45);

    transform:translateY(20px) scale(0.96);

    transition:0.3s ease;
}

.popup-overlay.active .popup-box{

    transform:translateY(0) scale(1);
}

/* ICON */

.popup-icon{

    width:105px;
    height:105px;

    margin:auto;
    margin-bottom:28px;

    border-radius:50%;

    background:rgba(200,169,107,0.12);

    border:1px solid rgba(200,169,107,0.18);

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:44px;

    box-shadow:
        0 10px 30px rgba(200,169,107,0.12);
}

/* TITLE */

.popup-box h2{

    font-size:38px;

    line-height:1.2;

    margin-bottom:14px;

    color:white;

    font-weight:700;
}

/* DESCRIPTION */

.popup-box p{

    color:#E8CFCF;

    font-size:15px;

    line-height:1.8;

    margin-bottom:34px;
}

/* BUTTONS */

.popup-buttons{

    display:flex;

    gap:16px;
}

/* CANCEL BUTTON */

.cancel-btn{

    flex:1;

    height:58px;

    border:none;

    border-radius:18px;

    background:#162033;

    color:white;

    font-size:15px;
    font-weight:600;

    cursor:pointer;

    transition:0.25s ease;
}

.cancel-btn:hover{

    background:#1C2942;

    transform:translateY(-2px);
}

/* CONFIRM BUTTON */

.confirm-btn{

    flex:1;

    height:58px;

    border:none;

    border-radius:18px;

    background:#E0B15C;

    color:#0F172A;

    font-size:15px;
    font-weight:700;

    cursor:pointer;

    transition:0.25s ease;

    box-shadow:
        0 10px 25px rgba(200,169,107,0.22);
}

.confirm-btn:hover{

    transform:translateY(-2px);

    box-shadow:
        0 14px 30px rgba(200,169,107,0.28);
}
/* MATCH SUCCESS */

.match-success-overlay{

    position:fixed;

    inset:0;

    background:rgba(0,0,0,0.75);

    display:flex;
    align-items:center;
    justify-content:center;

    z-index:99999;

    animation:fadeIn 0.3s ease;
}

.match-success-popup{

    width:430px;

    background:
    linear-gradient(
    180deg,
    #5A0B2E 0%,
    #3D0018 100%
    );

border:1px solid rgba(255,215,160,0.14);

    border-radius:32px;

    padding:45px 35px;

    text-align:center;

    animation:popupScale 0.35s ease;
}

.match-icon{

    width:110px;
    height:110px;

    margin:auto;
    margin-bottom:25px;

    border-radius:50%;

    background:rgba(200,169,107,0.12);

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:50px;
}

.match-success-popup h1{

    font-size:42px;

    margin-bottom:16px;

    color:white;
}

.match-success-popup p{

    color:#E8CFCF;

    line-height:1.7;

    margin-bottom:30px;
}

.match-success-popup button{

    width:100%;

    height:58px;

    border:none;

    border-radius:18px;

    background:#E0B15C;

    color:#0F172A;

    font-size:16px;
    font-weight:bold;

    cursor:pointer;

    transition:0.3s;
}

.match-success-popup button:hover{

    transform:translateY(-2px);
}

@keyframes popupScale{

    from{

        transform:scale(0.7);

        opacity:0;
    }

    to{

        transform:scale(1);

        opacity:1;
    }
}

@keyframes fadeIn{

    from{

        opacity:0;
    }

    to{

        opacity:1;
    }
}

/* PENDING POPUP */

.pending-popup-overlay{

    position:fixed;

    inset:0;

    background:rgba(0,0,0,0.72);

    display:flex;
    align-items:center;
    justify-content:center;

    z-index:999999;
}

.pending-popup-box{

    width:430px;

    background:
    linear-gradient(
    180deg,
    #5A0B2E 0%,
    #3D0018 100%
    );

    border:1px solid rgba(255,215,160,0.14);

    border-radius:32px;

    padding:40px 35px;

    text-align:center;

    animation:popupScale 0.3s ease;
}

.pending-icon{

    width:100px;
    height:100px;

    margin:auto;
    margin-bottom:24px;

    border-radius:50%;

    background:rgba(200,169,107,0.12);

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:46px;
}

.pending-popup-box h2{

    font-size:34px;

    margin-bottom:14px;
}

.pending-popup-box p{

    color:#E8CFCF;

    line-height:1.7;

    margin-bottom:28px;
}

.pending-popup-box button{

    width:100%;

    height:56px;

    border:none;

    border-radius:18px;

    background:#E0B15C;

    color:#0F172A;

    font-size:15px;
    font-weight:bold;

    cursor:pointer;
}

.popup-overlay{

    position:fixed;

    top:0;
    left:0;

    width:100%;
    height:100%;

    background:rgba(0,0,0,0.6);

    display:flex;
    align-items:center;
    justify-content:center;

    z-index:99999;
}

.popup-box{

    width:420px;

    background:#162033;

    border:1px solid #23314F;

    border-radius:28px;

    padding:40px 35px;

    text-align:center;

    animation:popupShow 0.25s ease;
}

.popup-icon{

    font-size:52px;

    margin-bottom:18px;
}

.popup-box h2{

    color:white;

    margin-bottom:14px;

    font-size:28px;
}

.popup-box p{

    color:#CBD5E1;

    line-height:1.7;

    font-size:15px;
}

.popup-box button{

    margin-top:28px;

    width:100%;

    height:52px;

    border:none;

    border-radius:16px;

    background:#E0B15C;

    color:#0F172A;

    font-weight:bold;

    cursor:pointer;

    font-size:15px;
}

@keyframes popupShow{

    from{

        opacity:0;
        transform:scale(0.85);

    }

    to{

        opacity:1;
        transform:scale(1);

    }

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

            ->latest()

            ->first();

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

    <a
        href="/chat/{{ $contact->id }}"
        class="chat-item {{ $receiver->id == $contact->id ? 'active' : '' }}">

        @if($contactIklan && $contactIklan->gambar)

            <img
                src="{{ asset($contactIklan->gambar) }}"
                class="avatar">

        @else

            <img
                src="{{ asset('default.png') }}"
                class="avatar">

        @endif

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

                    @if($contactIklan)

                        {{ $contactIklan->lokasi }}

                    @else

                        Belum memiliki iklan

                    @endif

                </p>

                @if($unreadCount > 0)

                <span style="
                    background:##E0B15C;
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

        </div>

    </a>

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

                @if($receiverIklan && $receiverIklan->gambar)

                    <img src="{{ asset($receiverIklan->gambar) }}">

                @else

                    <img src="{{ asset('default.png') }}">

                @endif

                <div>

                    <h3>

                        @if($receiverIklan)

                            {{ $receiverIklan->judul }}

                        @else

                            {{ $receiver->name }}

                        @endif

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

function closeMatchSuccess(){

    document
        .querySelector('.match-success-overlay')
        .style
        .display = 'none';
}

function closePendingPopup(){

    document
        .querySelector('.pending-popup-overlay')
        .style
        .display = 'none';
}

function closePopup(){

    document
        .getElementById('matchErrorPopup')
        .style
        .display = 'none';
}

</script>

@if(session('match_success'))

<div class="match-success-overlay active">

    <div class="match-success-popup">

        <div class="match-icon">

            🤝

        </div>

        <h1>

            It's a Match!

        </h1>

        <p>

            Kalian sekarang sudah terhubung
            dan bisa mulai menjadi roommate.

        </p>

        <button onclick="closeMatchSuccess()">

            Mulai Chat

        </button>

    </div>

</div>

@endif

@if(session('match_error'))

<div class="match-error">

    {{ session('match_error') }}

</div>

@endif

@if(session('match_pending_popup'))

<div class="pending-popup-overlay active">

    <div class="pending-popup-box">

        <div class="pending-icon">

            ⏳

        </div>

        <h2>

            Match Masih Aktif

        </h2>

        <p>

            Kamu sudah melakukan match dengan pengguna lain.
            Tunggu hingga match dibalas atau masa berlaku
            24 jam berakhir sebelum melakukan match lagi.

        </p>

        <button onclick="closePendingPopup()">

            Mengerti

        </button>

    </div>

</div>

@endif

@if(session('already_match_popup'))

<div class="pending-popup-overlay active">

    <div class="pending-popup-box">

        <div class="pending-icon">

            ⚠️

        </div>

        <h2>

            Match Sudah Aktif

        </h2>

        <p>

            Kamu sudah memiliki roommate aktif
            dan tidak bisa menerima match lain.

        </p>

        <button onclick="closePendingPopup()">

            Mengerti

        </button>

    </div>

</div>

@endif

@if(session('already_have_match'))

<div class="popup-overlay" id="matchErrorPopup">

    <div class="popup-box">

        <div class="popup-icon">

            ⚠️

        </div>

        <h2>

            Match Tidak Bisa Dilakukan

        </h2>

        <p>

            Kamu sudah memiliki roommate yang match.
            Satu akun hanya bisa memiliki satu match aktif.

        </p>

        <button onclick="closePopup()">

            Oke

        </button>

    </div>

</div>

@endif



</body>
</html>