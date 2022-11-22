<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    <link rel="stylesheet" href="./assets/css/templateHeader.css">
</head>
<body style="padding:0; margin:0; font-family:sans-serif; background: #EED6C4 ; background-size:cover; color: #fff;">
    <header>
        <div class="logo">
            <a href="./landingPage.html"><img src="" alt="logo-cafe"></a>
        </div>
        <div class="judul">
            <h1>CAFE TERSERAH</h1>
        </div>
        <div class="galeri">
            <a href="">galeri</a>
        </div>
    </header>
    <main style="padding: 20px;">
        <div style="color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 400px;" class="reservation-form">
            <h1 style="font-size:30px; text-align:center; text-transform:uppercase; margin: 180px 0 30px 0; ">Reservation Form</h1>
            <form action="#" method="post">
                <p style="font-size: 20px; margin:20px 0;">Nama :</p>
                <input style="font-size: 16px; padding:15px; width:100%; border:0; border-radius: 5px; outline: none;" type="text" name="Nama">
                <p  style="font-size: 20px; margin:15px 0;" >No Telp :</p>
                <input style="font-size: 16px; padding:15px; width:100%; border:0; border-radius: 5px; outline: none;" type="text" name="No Telp">
                <p  style="font-size: 20px; margin:15px 0;">Hari :</p>
                <input style="font-size: 16px; padding:15px; width:100%; border:0; border-radius: 5px; outline: none;" type="date" name="Hari">
                <p  style="font-size: 20px; margin:15px 0;">Jam :</p>
                <input style="font-size: 16px; padding:15px; width:100%; border:0; border-radius: 5px; outline: none;" type="text" name="Jam">
                <p  style="font-size: 20px; margin:15px 0;">Jumlah Orang :</p>
                <input style="font-size: 16px; padding:15px; width:100%; border:0; border-radius: 5px; outline: none;" type="text" name="Jumlah Orang">
                <button style="font-size: 18px; font-weight:bold; margin: 20px 20px 20px 120px; padding: 10px 15px; width: 50%; border: 0; border-radius: 5px; background-color: #fff;" type="submit">Reservation</button>
            </form>    
        </div>
    </main>
</body>
</html>