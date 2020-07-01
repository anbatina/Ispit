<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/stilovi.css">
    <script src="js/main.js"></script>
    <title>Ispit 3</title>
</head>
<body>
<div class="container">
    <div class="main">
        <div class="content">
            <div id="content-dijagonala-js" class="active">
                <div>
                    <input type="range" min="1" max="200" value="50" class="slider" id="inp-rectangle-a">
                    <span id="val-rectangle-a"></span>
                </div>
                <div>
                    <input type="range" min="1" max="200" value="50" class="slider" id="inp-rectangle-b">
                    <span id="val-rectangle-b"></span>
                </div>
                <div>
                    Duljina dijagonale: <span id="dijagonala-pravokutnika"></span>
                </div>
            </div>
            <div id="content-obavijest">
                <p>Obavijest 1</p>
                <p>Obavijest 2</p>
                <p id="clickToChange">KLIKNI ME</p>
                <p>Obavijest 3</p>
            </div>
            <div id="content-dijagonala-php">
                <form action="" id="frm-dijagonala-php">
                    <input type="number" name="a">
                    <input type="number" name="b">
                    <button type="submit">Izračunaj</button>
                </form>
                <p>Duljina dijagonale: <span id="dijagonala-pravokutnika-php"></span></p>
            </div>
            <div id="content-baza">

            </div>
        </div>
        <div class="sidebar">
            <ul>
                <li><a href="#" onclick="otvoriStranicu('content-dijagonala-js')">Dijagonala JS</a></li>
                <li><a href="#" onclick="otvoriStranicu('content-obavijest')">Obavijest</a></li>
                <li><a href="#" onclick="otvoriStranicu('content-dijagonala-php')">Dijagonala PHP</a></li>
                <li>Baza</li>
            </ul>
        </div>
    </div>
    <div class="status">
        <span id="clock"></span>
    </div>
</div>
</body>
</html>