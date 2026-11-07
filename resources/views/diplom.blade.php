<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diplom</title>
    <style>
        * {
          margin: 0;
          padding: 0;
        }

        @font-face {
          font-family: "Artemon";
          src: url("/fonts/ofont.ru_Artemon.ttf") format("truetype");
        }
        .x-dip-main {
          width: 210mm;
            height: 297mm;
          position: relative;
          /*background-image: url("/img/diplom.jpg");*/
          background-size: cover;
        }
        .x-dip-h1 {
          padding-top: 250px;
          color: darkred;
          text-align: center;
          font-family: Arial, Helvetica, sans-serif;
          padding-bottom: 20px;
        }
        .x-dip-p {
          font-family: Arial, Helvetica, sans-serif;
          text-align: center;
          width: 80%;
          margin-left: 10%;
        }
        .x-dip-h2 {
          text-align: center;
          width: 60%;
          margin-left: 20%;
          padding-bottom: 20px;
          color: navy;
          font-family: "Artemon";
          font-size: 60px;
        }
        .x-dip-img{
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }
    </style>
</head>
<body class="d-body">
    <?php
    $family = 'Калмыкова Евгения Брониславовна';
    $short = 'МАОУ '.'«'.'СОШ № 10'.'»';
    $rate = 'II';
    //$src = asset("img/diplom.jpg");

    ?>
    <div class="x-dip-main">
        <img class = 'x-dip-img' alt="1" src="{{ public_path('/img/diplom.jpg') }}" />
        <h1 class="x-dip-h1">{{ $rate }} степени</h1>
        <p class="x-dip-p">2-ой Региональной межпредметной Олимпиады для
            обучающихся 9-ых классов образовательных организаций общего образования
        </p>
        <br/>
        <p class="x-dip-p"><b>Награждается победитель</b></p>
        <br/>
        <h2 class="x-dip-h2">{{ $family }}</h2>
        <p class="x-dip-p">{{ $short }}</p>
    </div>
</body>
</html>
