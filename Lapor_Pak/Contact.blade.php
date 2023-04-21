<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporPak</title>

    <style>

        .container{
            margin-top: 10px;
            width: 1300px;
            height: 800px;
            display: flex;
            flex-direction: column;
            margin-left: auto;
            margin-right: auto;
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
            width: 320px;
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
                <li><a href=""></a>Tracking</li>
                <li><a href=""></a>Master Data</li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <div class="subjudul">
            <p style="font-size: 40px; font-family: Arial, Helvetica, sans-serif;"><b>Harap Masukan Laporan Anda Dengan Bahasa Yang Mudah Dipahami</p>
        </div>
        <div style="height: 600px ; width: 1250px; display: flex; padding-left: 2%;">
            <form>
                <label for="Nama" style="font-size: 25px; font-family: Arial, Helvetica, sans-serif;">Nama :</label><br>
                <input type="text" id="Nama" name="Nama" style="height: 30px; width: 300px;"><br>
                <br>
                <label for="email" style="font-size: 25px; font-family: Arial, Helvetica, sans-serif;">Tempat Kejadian :</label><br>
                <input type="email" id="email" name="email" style="height: 30px; width: 300px;"><br>
                <br>
                <label for="address" style="font-size: 25px; font-family: Arial, Helvetica, sans-serif;">Address</label><br>
                <textarea name="address" cols="30" rows="10" style="height: 300px; width: 300px;"></textarea>
                <br><br>

                <button type="submit" style="height: 30px; width: 80px;">Kirim</button>
            </form>
        </div>
    </div>
    

</body>
</html>