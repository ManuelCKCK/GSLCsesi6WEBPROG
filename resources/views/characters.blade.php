@extends('welcome')
@section('title','characters')

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
        .Heaader{
            background-color: rgb(150, 245, 109);
        }
        .charimg{
            background-color: white;
            width:fit-inherit;
            margin: 15px;
        }
        .charimg2{
            background-color: white;
            width:inherit;
            margin: 15px;
        }
        .btn{
            border: none;
            color: white;
            padding: 15px 32px;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>

    <div class="Heaader">
        <center>
            <h1 style="font-size: 50px"> Welcome to Sumeru!!! </h1>
        </center>
        
    </div>
    <div class="charimg">
        <a href="/tighnari">
            <img src="https://webstatic.hoyoverse.com/upload/contentweb/2022/08/16/036850e73547569f22ad5c2f5337ceb5_460155589265400008.png" width="300px" alt="" srcset="">
        </a>
        <a href="/candice">
            <img src="https://webstatic.hoyoverse.com/upload/contentweb/2022/09/22/d0226e61c64dbd14f3041775ceebb59a_2656769579196461401.png" width="350px" alt="" srcset="">
        </a>
        <a href="/nahida">
            <img src="https://webstatic.hoyoverse.com/upload/contentweb/2022/10/26/fe684624008db25ac4b44ea4704f9ba0_3756826627935711351.png" width="300px" alt="" srcset="">
        </a>
        <a href="/nilou">
            <img src="https://webstatic.hoyoverse.com/upload/contentweb/2022/09/28/d978cf1ce85e372971bdcf6add639e8f_3351442670589638152.png" width="300px" alt="" srcset="">
        </a>
        
        
        
    </div>
    <div class="charimg2">
        <a href="/cyno">
            <img src="https://webstatic.hoyoverse.com/upload/contentweb/2022/09/20/c4f05fb0c04afac045171c27c7d03cdc_3872571629427575985.png" width="300px" alt="" srcset="">    
        </a>
        <a href="/dora">
            <img src="https://webstatic.hoyoverse.com/upload/contentweb/2022/08/30/9b5c8d26504c19154056175bbb7e287a_5787324797772373669.png" width="300px" alt="" srcset="">
        </a>
        <a href="/collei">
            <img src="https://webstatic.hoyoverse.com/upload/contentweb/2022/08/16/f5b6d1c8c17d71f029088338c93cf534_966057954425808728.png" width="300px" alt="" srcset="">
        </a>
       
       
    </div>

    <div class="btn">
        <center>
            <a href="/download">
                <img src="https://webstatic.hoyoverse.com/upload/event/2022/09/26/458f8c8800cce4d373d1d774c3c03f8f_8665990734112397028.png?x-oss-process=image/format,webp/quality,Q_90" data-vshow="true"" alt="">
            </a>
        </center>
        
    </div>

</body>
@include('footer')
</html>