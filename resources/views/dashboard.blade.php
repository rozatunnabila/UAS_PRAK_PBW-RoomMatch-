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
    font-family: Arial, sans-serif;
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

/* Username */
.username{

    color:white;
    background:#162033;

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

/* Hover Line */
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

/* Active */
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

    width:400px;
}

.search-box input{

    width:100%;

    background:#162033;
    border:1px solid #23314F;

    color:white;

    padding:18px 22px;

    border-radius:18px;

    outline:none;

    font-size:15px;
}

.search-box input::placeholder{
    color:#94A3B8;
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

/* Profile Image */
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

/* Gender Age */
.gender-age{

    color:#C8A96B;
    font-size:15px;

    margin-bottom:22px;
}

/* Info List */
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

/* Chat Button */
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

/* Floating Add Button */
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

<!-- Navbar -->
<nav class="navbar">

    <!-- Left -->
    <div class="left-navbar">

        <h1 class="logo">
            Room<span>Match</span>
        </h1>

    </div>

    <!-- Center -->
    <div class="center-navbar">

        <div class="menu">

            <a href="/dashboard" class="active">
                Dashboard
            </a>

            <a href="/chat">
                Chat
            </a>

            <a href="/profile">
                Profile
            </a>

        </div>

    </div>

    <!-- Right -->
    <div class="right-navbar">

        <div class="username">
            {{ Auth::user()->name }}
        </div>

    </div>

</nav>

<!-- Content -->
<div class="content">

    <!-- Header -->
    <div class="header">

        <!-- Left -->
        <div class="header-left">

            <h2>
                Temukan Roommate Ideal
            </h2>

            <p>
                Cari teman sekamar yang cocok dengan gaya hidupmu.
            </p>

        </div>

        <!-- Right Search -->
        <div class="search-box">

            <input
                type="text"
                placeholder="Cari roommate, lokasi, kebiasaan...">

        </div>

    </div>

    <!-- Cards -->
    <div class="card-container">

        <!-- CARD 1 -->
        <div class="card">

            <img
                src="https://picsum.photos/500/400?random=1"
                class="profile-image">

            <div class="card-content">

                <h3>
                    Aulia Putri
                </h3>

                <p class="gender-age">
                    Perempuan • 21 Tahun
                </p>

                <div class="info-list">

                    <p>📍 Banda Aceh</p>
                    <p>🎓 Mahasiswa</p>
                    <p>🛏 Cari 1 roommate</p>
                    <p>💤 Tidur cepat</p>
                    <p>🧹 Suka bersih</p>

                </div>

                <div class="budget">

                    <small>Budget</small>

                    <h4>
                        Rp 800rb - 1,2jt
                    </h4>

                </div>

                <a href="/chat" class="match-btn">
                    Chat
                </a>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="card">

            <img
                src="https://picsum.photos/500/400?random=2"
                class="profile-image">

            <div class="card-content">

                <h3>
                    Rizky Maulana
                </h3>

                <p class="gender-age">
                    Laki-laki • 23 Tahun
                </p>

                <div class="info-list">

                    <p>📍 Lhokseumawe</p>
                    <p>💼 Freelancer</p>
                    <p>🛏 Cari 2 roommate</p>
                    <p>🌙 Night Owl</p>
                    <p>🎮 Suka gaming</p>

                </div>

                <div class="budget">

                    <small>Budget</small>

                    <h4>
                        Rp 1jt - 1,5jt
                    </h4>

                </div>

                <a href="/chat" class="match-btn">
                    Chat
                </a>

            </div>

        </div>

        <!-- CARD 3 -->
        <div class="card">

            <img
                src="https://picsum.photos/500/400?random=3"
                class="profile-image">

            <div class="card-content">

                <h3>
                    Salsabila
                </h3>

                <p class="gender-age">
                    Perempuan • 20 Tahun
                </p>

                <div class="info-list">

                    <p>📍 Medan</p>
                    <p>🎓 Mahasiswa</p>
                    <p>🛏 Cari 1 roommate</p>
                    <p>☀️ Bangun pagi</p>
                    <p>📚 Suka belajar</p>

                </div>

                <div class="budget">

                    <small>Budget</small>

                    <h4>
                        Rp 900rb - 1,3jt
                    </h4>

                </div>

                <a href="/chat" class="match-btn">
                    Chat
                </a>

            </div>

        </div>

        <!-- CARD 4 -->
        <div class="card">

            <img
                src="https://picsum.photos/500/400?random=4"
                class="profile-image">

            <div class="card-content">

                <h3>
                    Fadhlan
                </h3>

                <p class="gender-age">
                    Laki-laki • 24 Tahun
                </p>

                <div class="info-list">

                    <p>📍 Banda Aceh</p>
                    <p>💼 Programmer</p>
                    <p>🛏 Cari 1 roommate</p>
                    <p>☕ Suka ngopi</p>
                    <p>🎵 Suka musik</p>

                </div>

                <div class="budget">

                    <small>Budget</small>

                    <h4>
                        Rp 1,2jt - 1,8jt
                    </h4>

                </div>

                <a href="/chat" class="match-btn">
                    Chat
                </a>

            </div>

        </div>

        <!-- CARD 5 -->
        <div class="card">

            <img
                src="https://picsum.photos/500/400?random=5"
                class="profile-image">

            <div class="card-content">

                <h3>
                    Nadia Safira
                </h3>

                <p class="gender-age">
                    Perempuan • 22 Tahun
                </p>

                <div class="info-list">

                    <p>📍 Langsa</p>
                    <p>🎓 Mahasiswa</p>
                    <p>🛏 Cari 2 roommate</p>
                    <p>🧹 Suka bersih</p>
                    <p>🍜 Suka masak</p>

                </div>

                <div class="budget">

                    <small>Budget</small>

                    <h4>
                        Rp 700rb - 1jt
                    </h4>

                </div>

                <a href="/chat" class="match-btn">
                    Chat
                </a>

            </div>

        </div>

    </div>

</div>

<!-- Floating Add Button -->
<a href="/iklan/create" class="add-btn">
    +
</a>

</body>
</html>