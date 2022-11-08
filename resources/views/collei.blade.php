@extends('welcome')
@section('title','collei')

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
            margin-top: 150px;
        }
    </style>
        <div class="pic">
            <img src="https://webstatic.hoyoverse.com/upload/contentweb/2022/08/16/f5b6d1c8c17d71f029088338c93cf534_966057954425808728.png" width="750px" alt="" srcset="">
        </div>
<div class="Desc" style="background-color: rgb(82, 65, 65)">
    <center>
        <h1 style="color: white">Collei</h1>
        <h2 style="color: white">A Trainee Forest Ranger who is under the tutelage of Tighnari. She started her academic career a little later than her peers, so she is currently working hard to catch up.
            She hides the other side of her personality deep under the surface of optimism and kindness.
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