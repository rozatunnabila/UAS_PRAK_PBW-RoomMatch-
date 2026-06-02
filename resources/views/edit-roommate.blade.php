<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Roommate</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    background:#0B1120;

    font-family:Arial, sans-serif;

    color:white;
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

/* Back */

.back-btn{

    text-decoration:none;

    color:#CBD5E1;

    font-size:15px;

    transition:0.3s;
}

.back-btn:hover{

    color:white;
}

/* Container */

.form-wrapper{

    width:100%;

    display:flex;
    justify-content:center;

    padding:60px 20px;
}

/* Form */

.form-box{

    width:100%;
    max-width:780px;

    background:#162033;

    border:1px solid #23314F;

    border-radius:30px;

    padding:40px;
}

/* Title */

.form-title{

    font-size:38px;

    margin-bottom:35px;
}

/* Group */

.form-group{

    margin-bottom:22px;
}

/* Label */

.form-group label{

    display:block;

    margin-bottom:10px;

    color:#CBD5E1;

    font-size:14px;
}

/* Input */

.form-group input{

    width:100%;

    height:58px;

    border:none;

    outline:none;

    background:#0F172A;

    color:white;

    border-radius:16px;

    padding:0 18px;

    font-size:15px;
}

/* File Input */

.form-group input[type="file"]{

    padding:15px;

    height:auto;
}

/* Preview */

.preview-image{

    width:100%;

    height:300px;

    object-fit:cover;

    border-radius:20px;

    margin-bottom:20px;

    border:1px solid #23314F;
}

/* Disabled */

.form-group input:disabled{

    opacity:0.7;

    cursor:not-allowed;
}

/* Button */

.submit-btn{

    width:100%;

    height:58px;

    margin-top:20px;

    background:#C8A96B;

    color:#0F172A;

    border:none;

    border-radius:18px;

    font-size:16px;
    font-weight:bold;

    cursor:pointer;

    transition:0.3s;
}

.submit-btn:hover{

    background:#b89255;

    transform:scale(1.02);
}

</style>

</head>

<body>

<nav class="navbar">

    <h1 class="logo">

        Room<span>Match</span>

    </h1>

    <a href="/dashboard" class="back-btn">

        ← Kembali

    </a>

</nav>

<div class="form-wrapper">

    <div class="form-box">

        <h2 class="form-title">

            Edit Iklan Roommate

        </h2>

        @if($roommate->gambar)

        <img
            src="{{ asset($roommate->gambar) }}"
            class="preview-image">

        @endif

        <form
            action="/roommate/update/{{ $roommate->id }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <!-- USERNAME AKUN -->

            <div class="form-group">

                <label>

                    Username Akun

                </label>

                <input
                    type="text"
                    value="{{ Auth::user()->name }}"
                    disabled>

            </div>

            <!-- NAMA CARD -->

            <div class="form-group">

                <label>

                    Nama Tampilan Card

                </label>

                <input
                    type="text"
                    name="judul"
                    value="{{ $roommate->judul }}"
                    required>

            </div>

            <!-- FOTO -->

            <div class="form-group">

                <label>

                    Upload Foto Baru

                </label>

                <input
                    type="file"
                    name="image">

            </div>

            <!-- LOKASI -->

            <div class="form-group">

                <label>

                    Lokasi

                </label>

                <input
                    type="text"
                    name="lokasi"
                    value="{{ $roommate->lokasi }}"
                    required>

            </div>

            <!-- PEKERJAAN -->

            <div class="form-group">

                <label>

                    Status / Pekerjaan

                </label>

                <input
                    type="text"
                    name="pekerjaan"
                    value="{{ $roommate->pekerjaan }}"
                    required>

            </div>

            <!-- ROOMMATE -->

            <div class="form-group">

                <label>

                    Preferensi Roommate

                </label>

                <input
                    type="text"
                    name="roommate"
                    value="{{ $roommate->roommate }}"
                    required>

            </div>

            <!-- HABIT 1 -->

            <div class="form-group">

                <label>

                    Habit 1

                </label>

                <input
                    type="text"
                    name="habit1"
                    value="{{ $roommate->habit1 }}"
                    required>

            </div>

            <!-- HABIT 2 -->

            <div class="form-group">

                <label>

                    Habit 2

                </label>

                <input
                    type="text"
                    name="habit2"
                    value="{{ $roommate->habit2 }}"
                    required>

            </div>

            <!-- BUDGET -->

            <div class="form-group">

                <label>

                    Budget

                </label>

                <input
                    type="text"
                    name="harga"
                    value="{{ $roommate->harga }}"
                    required>

            </div>

            <button class="submit-btn">

                Simpan Perubahan

            </button>

        </form>

    </div>

</div>

</body>

</html>