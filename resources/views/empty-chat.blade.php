<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Belum Ada Chat</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    background:
    linear-gradient(
        135deg,
        #4A001F 0%,
        #650024 45%,
        #2B0010 100%
    );

    font-family:Arial,sans-serif;

    height:100vh;

    display:flex;
    align-items:center;
    justify-content:center;

    overflow:hidden;
}

/* =========================
EMPTY BOX
========================= */

.empty-box{

    width:430px;

    background:rgba(255,255,255,0.06);

    backdrop-filter:blur(18px);

    border:1px solid rgba(255,215,160,0.14);

    padding:55px 45px;

    border-radius:34px;

    text-align:center;

    box-shadow:
    0 20px 60px rgba(0,0,0,0.28),
    0 10px 35px rgba(255,215,160,0.06);

    animation:popupShow 0.35s ease;
}

/* =========================
ICON
========================= */

.icon{

    width:110px;
    height:110px;

    margin:auto;
    margin-bottom:28px;

    border-radius:50%;

    background:rgba(224,177,92,0.10);

    border:1px solid rgba(224,177,92,0.14);

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:50px;

    box-shadow:
    0 10px 30px rgba(224,177,92,0.12);
}

/* =========================
TITLE
========================= */

.empty-box h1{

    color:white;

    font-size:38px;

    margin-bottom:16px;

    text-shadow:
    0 4px 16px rgba(0,0,0,0.18);
}

/* =========================
DESCRIPTION
========================= */

.empty-box p{

    color:#E8CFCF;

    font-size:15px;

    line-height:1.8;

    margin-bottom:34px;
}

/* =========================
BUTTON
========================= */

.empty-box a{

    background:#E0B15C;

    color:#4A001F;

    text-decoration:none;

    padding:16px 32px;

    border-radius:18px;

    font-weight:bold;

    display:inline-block;

    transition:0.3s;

    box-shadow:
    0 10px 25px rgba(224,177,92,0.22);
}

.empty-box a:hover{

    transform:translateY(-3px);

    background:#C99845;

    box-shadow:
    0 14px 30px rgba(224,177,92,0.28);
}

/* =========================
ANIMATION
========================= */

@keyframes popupShow{

    from{

        opacity:0;

        transform:
        translateY(25px)
        scale(0.92);
    }

    to{

        opacity:1;

        transform:
        translateY(0)
        scale(1);
    }
}

</style>

</head>

<body>

<div class="empty-box">

    <div class="icon">
        💬
    </div>

    <h1>
        Belum Ada Chat
    </h1>

    <p>
        Kamu belum memiliki riwayat percakapan dengan pengguna lain.
        Yuk mulai cari roommate dan ngobrol sekarang.
    </p>

    <a href="/dashboard">

        Cari Roommate

    </a>

</div>

</body>
</html>