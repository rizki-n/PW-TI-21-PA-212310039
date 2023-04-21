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
            height: 750px;
            display: flex;
            flex-direction: column;
            margin-left: auto;
            margin-right: auto;
            background-color: white;
            opacity: 70%;
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
    </div>
    <div class="container">
        <div class="subjudul">
            <p style="font-size: 40px; font-family: Arial, Helvetica, sans-serif;"><b>Cari Lokasi Kantor Polisi Terdekat</p>
        </div>
        <div style="height: 600px ; width: 1250px; display: flex; padding-left: 2%; justify-content: center; flex-direction: column; margin-left: auto; margin-right: auto; padding-left: 10%;">
            <div style="height: 450px; width: 1000px; border-style: solid;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5413078813785!2d106.80508518918062!3d-6.579421473308823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1
                s0x2e69c5e2ccc27bef%3A0x95860988a497f417!2sPolsek%20Bogor%20Utara!5e0!3m2!1sen!2sid!4v1682073043827!5m2!1sen!2sid" 
                width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>
            </div><br>
            <input placeholder="Cari..." id="Nama" name="Nama" style="height: 50px; width: 1000px;"><br>
        </div>
    </div>
</body>
</html>