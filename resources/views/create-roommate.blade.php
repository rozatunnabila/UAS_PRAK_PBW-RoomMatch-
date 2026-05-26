<!-- resources/views/create-roommate.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah Roommate</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    background:#0B1120;

    font-family:Arial,sans-serif;

    padding:50px;

    color:white;
}

.container{

    max-width:700px;

    margin:auto;

    background:#162033;

    padding:40px;

    border-radius:25px;

    border:1px solid #23314F;
}

h1{

    margin-bottom:30px;

    font-size:40px;
}

.form-group{

    margin-bottom:20px;
}

label{

    display:block;

    margin-bottom:10px;

    color:#CBD5E1;
}

input,
select{

    width:100%;

    padding:16px;

    border:none;

    border-radius:14px;

    background:#0F172A;

    color:white;

    outline:none;
}

button{

    width:100%;

    padding:18px;

    border:none;

    border-radius:16px;

    background:#C8A96B;

    color:#0F172A;

    font-size:16px;
    font-weight:bold;

    cursor:pointer;

    margin-top:20px;

    transition:0.3s;
}

button:hover{

    background:#b89255;
}

</style>

</head>

<body>

<div class="container">

    <h1>
        Tambah Roommate
    </h1>

    <form action="/roommate/store" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="form-group">

            <label>
                Upload Foto
            </label>

            <input type="file" name="image">

        </div>

        <div class="form-group">

            <label>
                Nama
            </label>

            <input type="text" name="name" required>

        </div>

        <div class="form-group">

            <label>
                Gender
            </label>

            <select name="gender">

                <option>Laki-laki</option>
                <option>Perempuan</option>

            </select>

        </div>

        <div class="form-group">

            <label>
                Umur
            </label>

            <input type="text" name="umur">

        </div>

        <div class="form-group">

            <label>
                Lokasi
            </label>

            <input type="text" name="lokasi">

        </div>

        <div class="form-group">

            <label>
                Status / Pekerjaan
            </label>

            <input type="text" name="status">

        </div>

        <div class="form-group">

            <label>
                Cari Berapa Roommate
            </label>

            <input type="text" name="roommate">

        </div>

        <div class="form-group">

            <label>
                Kebiasaan 1
            </label>

            <input type="text" name="habit1">

        </div>

        <div class="form-group">

            <label>
                Kebiasaan 2
            </label>

            <input type="text" name="habit2">

        </div>

        <div class="form-group">

            <label>
                Budget
            </label>

            <input type="text" name="budget">

        </div>

        <button type="submit">
            Tambah Roommate
        </button>

    </form>

</div>

</body>
</html>