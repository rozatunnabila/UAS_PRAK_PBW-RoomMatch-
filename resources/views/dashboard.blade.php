<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>RoomMatch Dashboard</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial, sans-serif;
    background:#0B1120;
}

/* Navbar */

.navbar{

    width:100%;
    height:90px;

    background:#0F172A;

    border-bottom:1px solid #1E293B;

    padding:0 60px;

    display:flex;
    align-items:center;
    justify-content:space-between;

    position:sticky;
    top:0;

    z-index:999;
}

/* Left */

.left-navbar{
    width:20%;
}

/* Center */

.center-navbar{

    width:60%;

    display:flex;
    justify-content:center;
}

/* Right */

.right-navbar{

    width:20%;

    display:flex;
    justify-content:flex-end;
}

/* Logo */

.logo{

    color:white;

    font-size:34px;
    font-weight:bold;
}

.logo span{
    color:#C8A96B;
}

/* MATCH NOTIFICATION */

.match-notif{

    background:#C8A96B;

    color:#0F172A;

    padding:10px 14px;

    border-radius:14px;

    font-weight:700;

    text-decoration:none;

    transition:0.3s;

    margin-right:14px;

    display:flex;
    align-items:center;
    justify-content:center;
}

.match-notif:hover{

    transform:translateY(-2px);

    background:#E0BC76;
}

/* Username */

.username{

    background:#162033;
    color:white;

    padding:12px 20px;

    border-radius:14px;

    font-size:14px;
}

/* Menu */

.menu{

    display:flex;
    align-items:center;

    gap:45px;
}

.menu a{

    text-decoration:none;

    color:#CBD5E1;

    font-weight:500;

    position:relative;

    transition:0.3s;
}

.menu a:hover{
    color:white;
}

.menu a::after{

    content:'';

    position:absolute;

    left:0;
    bottom:-8px;

    width:0%;
    height:2px;

    background:#C8A96B;

    transition:0.3s;
}

.menu a:hover::after{
    width:100%;
}

.menu .active{
    color:#C8A96B;
}

.menu .active::after{
    width:100%;
}

/* Content */

.content{
    padding:50px 60px;
}

/* Header */

.header{

    display:flex;
    justify-content:space-between;
    align-items:center;

    margin-bottom:50px;
}

/* Header Left */

.header-left h2{

    color:white;

    font-size:54px;

    margin-bottom:10px;
}

.header-left p{

    color:#94A3B8;

    font-size:18px;
}

/* Search */

.search-box{

    width:420px;

    display:flex;
    align-items:center;

    background:#162033;

    border:1px solid #23314F;

    border-radius:18px;

    overflow:hidden;
}

.search-box input{

    width:100%;

    background:none;
    border:none;

    color:white;

    padding:18px 22px;

    outline:none;

    font-size:15px;
}

.search-box input::placeholder{
    color:#94A3B8;
}

/* Search Button */

.search-btn{

    width:65px;
    height:58px;

    background:transparent;

    color:#94A3B8;

    border:none;

    cursor:pointer;

    display:flex;
    align-items:center;
    justify-content:center;

    transition:0.3s;
}

.search-btn:hover{
    color:white;
}

/* Cards */

.card-container{

    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:30px;
}

/* Card */

.card{

    background:#162033;

    border:1px solid #23314F;

    border-radius:28px;

    overflow:hidden;

    transition:0.3s;
}

.card:hover{

    transform:translateY(-8px);

    box-shadow:0 10px 30px rgba(0,0,0,0.4);
}

/* Image */

.profile-image{

    width:100%;
    height:260px;

    object-fit:cover;
}

/* Card Content */

.card-content{
    padding:25px;
}

/* Name */

.card-content h3{

    color:white;

    font-size:28px;

    margin-bottom:8px;
}

/* Gender */

.gender-age{

    color:#C8A96B;

    font-size:15px;

    margin-bottom:22px;
}

/* Info */

.info-list{

    display:flex;
    flex-direction:column;

    gap:12px;

    margin-bottom:25px;
}

.info-list p{

    color:#CBD5E1;

    font-size:15px;
}

/* Budget */

.budget small{
    color:#94A3B8;
}

.budget h4{

    color:#C8A96B;

    font-size:24px;

    margin-top:6px;
}

/* Button */

.match-btn{

    width:100%;

    margin-top:25px;

    background:#C8A96B;
    color:#0F172A;

    border:none;

    border-radius:16px;

    padding:16px;

    font-size:16px;
    font-weight:bold;

    cursor:pointer;

    transition:0.3s;

    text-decoration:none;

    display:flex;
    align-items:center;
    justify-content:center;
}

.match-btn:hover{

    background:#b89255;

    transform:scale(1.02);
}

/* Floating Button */

.add-btn{

    position:fixed;

    right:35px;
    bottom:35px;

    width:75px;
    height:75px;

    background:#C8A96B;
    color:#0F172A;

    border-radius:50%;

    text-decoration:none;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:42px;
    font-weight:bold;

    box-shadow:0 10px 25px rgba(0,0,0,0.4);

    transition:0.3s;

    z-index:999;
}

.add-btn:hover{

    transform:scale(1.1);

    background:#b89255;
}

/* Empty */

.empty{

    background:#162033;

    color:white;

    padding:30px;

    border-radius:20px;
}

/* Responsive */

@media(max-width:992px){

    .card-container{
        grid-template-columns:repeat(2,1fr);
    }

}

@media(max-width:768px){

    .navbar{

        height:auto;

        padding:20px;

        flex-direction:column;

        gap:20px;
    }

    .left-navbar,
    .center-navbar,
    .right-navbar{

        width:100%;

        justify-content:center;
    }

    .header{

        flex-direction:column;

        align-items:flex-start;

        gap:25px;
    }

    .search-box{
        width:100%;
    }

    .content{
        padding:30px 20px;
    }

    .header-left h2{
        font-size:40px;
    }

    .card-container{
        grid-template-columns:1fr;
    }

}

</style>

</head>

<body>

<nav class="navbar">

    <div class="left-navbar">

        <h1 class="logo">
            Room<span>Match</span>
        </h1>

    </div>

    <div class="center-navbar">

        <div class="menu">

            <a href="/dashboard" class="active">
                Dashboard
            </a>

            <a href="/chat-list" style="position:relative;">

    Chat

    @if($chatNotif > 0)

        <span style="
            position:absolute;
            top:-10px;
            right:-18px;

            background:#EF4444;
            color:white;

            width:22px;
            height:22px;

            border-radius:50%;

            display:flex;
            align-items:center;
            justify-content:center;

            font-size:12px;
            font-weight:bold;
        ">

            {{ $chatNotif }}

        </span>

    @endif

</a>

            <a href="/profile">
                Profile
            </a>

        </div>

    </div>

    <div class="right-navbar">

   @if($matchRequests->count() > 0)

        <a href="/chat/{{ $matchUser->id }}" class="match-notif">

           🔔 {{ $matchRequests->count() }}
        </a>

    @endif

    <div class="username">

        {{ Auth::user()->name }}

    </div>

</div>

</nav>

<div class="content">

    <div class="header">

        <div class="header-left">

            <h2>
                Temukan Roommate Ideal
            </h2>

            <p>
                Cari teman sekamar yang cocok dengan gaya hidupmu.
            </p>

        </div>

        <form action="/dashboard" method="GET" class="search-box">

            <input
                type="text"
                name="search"
                placeholder="Cari roommate, lokasi, kebiasaan..."
                value="{{ request('search') }}">

            <button type="submit" class="search-btn">

                <svg xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24">

                    <circle cx="11" cy="11" r="8"></circle>

                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>

                </svg>

            </button>

        </form>

    </div>

    <div class="card-container">

        @forelse($filteredRoommates as $roommate)

            <div class="card">

                <img
                    src="{{ asset($roommate->gambar) }}"
                    class="profile-image">

                <div class="card-content">

                    <h3>
                        {{ $roommate->judul }}
                    </h3>

                    <p class="gender-age">
                        {{ $roommate->gender }} • {{ $roommate->umur }}
                    </p>

                    <div class="info-list">

                        <p>
                            📍 {{ $roommate->lokasi }}
                        </p>

                        <p>
                            🎓 {{ $roommate->pekerjaan }}
                        </p>

                        <p>
                            🛏 {{ $roommate->roommate }}
                        </p>

                        <p>
                            ✨ {{ $roommate->habit1 }}
                        </p>

                        <p>
                            ✨ {{ $roommate->habit2 }}
                        </p>

                    </div>

                    <div class="budget">

                        <small>
                            Budget
                        </small>

                        <h4>
                            {{ $roommate->harga }}
                        </h4>

                    </div>

                    @if($roommate->user_id != Auth::id())

                    <a href="/chat/{{ $roommate->id }}" class="match-btn">

                        Chat

                    </a>

                    @endif

                </div>

            </div>

        @empty

            <div class="empty">
                Roommate tidak ditemukan.
            </div>

        @endforelse

    </div>

</div>

<a href="/roommate/create" class="add-btn">
    +
</a>

</body>
</html>