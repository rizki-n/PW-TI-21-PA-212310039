<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporPak</title>

    <style>

        .container{
            margin-top: 0px;
            width: 1500px;
            height: 800px;
            border-style: dotted;
            justify-content: center;
            
        }

        .container2{
            margin-top: 10px;
            width: 1300px;
            height: 800px;
            display: flex;
            flex-direction: column;
            margin-left: auto;
            margin-right: auto;
            border-style: dotted;
            background-color: white;
            opacity: 70%;
        }
        
        .judul{
            font-size: 90px;
            color: #fff;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .subjudul{
            height: 200px;
            width: 700px;;
            display: flex;
            margin-left: auto;
            margin-right: auto;
            justify-content: center;
            text-align: center;
        }

        .logo{
            padding-top: 100px;
            height: 550px;
            width: 500px;;
            display: flex;
            margin-left: auto;
            margin-right: auto;
            justify-content: center;
            
        }

        .posting{
            width: 300px;
            height: 450px;
            padding: 10px;
            text-align: left;
            margin-left: 100px;
            display: inline-block;
            margin-right: 30px; 
            margin-top: 40px;
            color: #fff;
        
        }    

        nav {
            background-color: #333;
            height: 50px;
            width: 1500px;
            display: flex;
            justify-content: space-between;
        }

        nav ul {
            list-style: none;
            padding-left: 10px;
            display: flex;
        }

        nav li {
            
            margin: -23px 10px;
            color: #fff;
        }

        nav a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        nav li:hover {
            background-color: #555;
            padding: 5px;
            
        }
    </style>
</head>
<body background="./assets/wall.jpg">
    <div>
        <nav>
            <img src="./assets/logo.png" width="80" height="40">
            <ul>
                <li><a href="Home.html"></a>Main Menu</Menu></li>
                <li><a href="Contact.html"></a>Contact</li>
                <li><a href="Tracking.html"></a>Tracking</li>
                <li><a href=""></a>Master Data</li>
            </ul>
        </nav>
        <div class="logo"> 
            <img src="./assets/logo2.png" width="800" height="500">      
        </div>
        <div class="container">     
            <hr style="width: 90%;">
            <div class="subjudul">      <!--Sub Judul-->
                <p style="font-family: Arial, Helvetica, sans-serif;font-size: 40px;color: #fff;">Daftar Orang Hilang <br>
                <span style="font-size: 25px;">Jika Memiliki Informasi Terkait Harap Segera Lapor</span></p>
            </div>

            <div class="posting"> <!--post1-->
                <img src="./assets/pp1.jpg" alt="Korban1" width="250" height="300">
                <p>Nama             : Joseph Sins</p>
                <p>Jenis kelamin    : Laki-laki</p>
                <p>Umur             : 30Tahun</p>
                <p>Terakhir Terlihat: Mengisi Bensin</p>
            </div>

            <div class="posting"> <!--post2-->
                <img src="./assets/pp3.jpg" alt="Korban1" width="260" height="300">
                <p>Nama             : Alan Wake</p>
                <p>Jenis kelamin    : Laki-laki</p>
                <p>Umur             : 24Tahun</p>
                <p>Terakhir Terlihat: Berbelanja Di Toko</p>
            </div>

            <div class="posting"> <!--post3-->
                <img src="./assets/ppl2.jpg" alt="Korban1" width="250" height="300">
                <p>Nama             : Bobby</p>
                <p>Jenis kelamin    : Laki-laki</p>
                <p>Umur             : 23Tahun</p>
                <p>Terakhir Terlihat: Jl Otista Rt1 </p>
            </div>
            
        </div>
        <div>
            
        </div>
    </div>
</body>
</html>