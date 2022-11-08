@extends('welcome')
@section('title','candice')

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
            margin-top: 170px;
        }
    </style>
        <div class="pic">
            <img src="https://webstatic.hoyoverse.com/upload/contentweb/2022/09/22/d0226e61c64dbd14f3041775ceebb59a_2656769579196461401.png" width="800px" alt="" srcset="">
        </div>
<div class="Desc" style="background-color: rgb(82, 65, 65)">
    <center>
        <h1 style="color: white">Candice</h1>
        <h2 style="color: white">The guardian of Aaru Village who is gentle and benevolent.
            She will not allow anyone harm Aaru Village under her watch.
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