@extends('welcome')
@section('title','nahida')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        .Desc{
            height: 400px;
        }
        .pic{
            background-color: aqua;
            margin: auto;
            width: 50%;
            border: 3px solid green;
            padding: 10px;
        }
        .backbutton{
            margin-top: 110px;
        }
    </style>
        <div class="pic">
            <img src="https://webstatic.hoyoverse.com/upload/contentweb/2022/10/26/fe684624008db25ac4b44ea4704f9ba0_3756826627935711351.png" width="750px" alt="" srcset="">
        </div>
<div class="Desc" style="background-color: rgb(82, 65, 65)">
    <center>
        <h1 style="color: white">Nahida</h1>
        <h2 style="color: white">Lesser Lord Kusanali dwells deep in the Sanctuary of Surasthana, and has never really been in the limelight, nor has she even been mentioned much.
            Her burden is heavy, but though she may experience loneliness, and though darkness is all she sees before her, she will not stop moving forward.
        </h2>
        <div class="backbutton">
            <a href="/characters">
                <img src="https://webstatic.hoyoverse.com/upload/event/2022/09/25/e7bcf1c83f553b73b5fdfc4a90bdd17b_1073104431131178675.png?x-oss-process=image/format,webp/quality,Q_90" alt="">    
            </a>

</div>
    </center>

</div>
</body>
</html>

@include('footer')