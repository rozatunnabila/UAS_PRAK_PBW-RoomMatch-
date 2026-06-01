<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile - RoomMatch</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        *{

            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{

            background:#071224;

            font-family:sans-serif;

            color:white;
        }

        .navbar{

            width:100%;
            height:82px;

            background:#0F172A;

            border-bottom:1px solid #1E293B;

            display:flex;
            align-items:center;
            justify-content:space-between;

            padding:0 50px;

            position:fixed;

            top:0;
            left:0;

            z-index:999;
        }

        .logo{

            font-size:40px;

            font-weight:bold;

            color:white;
        }

        .logo span{

            color:#C8A96B;
        }

        .nav-center{

    display:flex;

    gap:40px;

    position:absolute;

    left:50%;

    transform:translateX(-50%);
}

.nav-center a{

    color:white;

    text-decoration:none;

    font-size:15px;

    transition:0.2s;
}

.nav-center a:hover{

    color:#C8A96B;
}

.nav-center .active{

    color:#C8A96B;

    border-bottom:2px solid #C8A96B;

    padding-bottom:6px;
}

.nav-right{

    background:#18243D;

    padding:10px 18px;

    border-radius:14px;

    font-size:14px;

    font-weight:600;
}
        .nav-menu a{

            color:white;

            text-decoration:none;

            font-size:15px;
        }

        .nav-menu .active{

            color:#C8A96B;
        }

        .profile-page{

            padding:130px 30px 50px 30px;
        }

        .profile-container{

            width:100%;
            max-width:900px;

            margin:auto;

            background:#111C34;

            border:1px solid #22304F;

            border-radius:30px;

            padding:40px;
        }

        .profile-title{

            font-size:34px;

            font-weight:bold;

            margin-bottom:35px;
        }

        .profile-box{

            margin-bottom:45px;
        }

        input{

            width:100% !important;

            background:#18243D !important;

            border:none !important;

            color:white !important;

            border-radius:14px !important;

            margin-top:8px !important;
        }

        label{

            color:#CBD5E1 !important;
        }

        p{

            color:#94A3B8 !important;
        }

        button{

            background:#C8A96B !important;

            color:#071224 !important;

            border:none !important;

            border-radius:14px !important;

            font-weight:bold !important;

            cursor:pointer;
        }

        .logout-btn{

            width:100%;

            height:55px;

            margin-top:20px;

            font-size:15px;
        }

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

            transition:0.25s;

            z-index:99999;
        }

        .popup-overlay.active{

            opacity:1;
            visibility:visible;
        }

        .popup-box{

            width:420px;

            background:#111C34;

            border:1px solid #22304F;

            border-radius:28px;

            padding:35px;

            text-align:center;
        }

        .popup-box h2{

            margin-bottom:12px;
        }

        .popup-box p{

            line-height:1.7;
        }

        .popup-actions{

            display:flex;
            gap:15px;

            margin-top:28px;
        }

        .popup-actions button,
        .popup-actions a{

            flex:1;

            height:50px;

            display:flex;
            align-items:center;
            justify-content:center;

            text-decoration:none;

            border-radius:14px;

            font-weight:bold;
        }

        .popup-actions button{

            background:#1E293B !important;

            color:white !important;
        }

        .popup-actions a{

            background:#C8A96B;

            color:#071224;
        }

    </style>

</head>

<body>

    <div class="navbar">

    <div class="logo">

        Room<span>Match</span>

    </div>

    <div class="nav-center">

        <a href="/dashboard">

            Dashboard

        </a>

        <a href="/chat-list">

            Chat

        </a>

        <a href="/profile" class="active">

            Profile

        </a>

    </div>

    <div class="nav-right">

        {{ Auth::user()->name }}

    </div>

</div>

    <div class="profile-page">

        <div class="profile-container">

            <div class="profile-title">

                Profile Settings

            </div>

            <div class="profile-box">

                @include('profile.partials.update-profile-information-form')

            </div>

            <div class="profile-box">

                @include('profile.partials.update-password-form')

            </div>

            <button
                class="logout-btn"
                onclick="openLogoutPopup()">

                Logout

            </button>

        </div>

    </div>

    <div class="popup-overlay" id="logoutPopup">

        <div class="popup-box">

            <h2>

                Logout?

            </h2>

            <p>

                Kamu yakin ingin keluar dari akun RoomMatch?

            </p>

            <div class="popup-actions">

                <button onclick="closeLogoutPopup()">

                    Batal

                </button>

                <a href="/logout-manual">

                    Logout

                </a>

            </div>

        </div>

    </div>

    <script>

        function openLogoutPopup(){

            document
                .getElementById('logoutPopup')
                .classList
                .add('active');
        }

        function closeLogoutPopup(){

            document
                .getElementById('logoutPopup')
                .classList
                .remove('active');
        }

    </script>

</body>

</html>