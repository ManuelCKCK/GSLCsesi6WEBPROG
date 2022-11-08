@extends('welcome')
@section('title','download')

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


    <div class="Header">
        <center style="background-color: antiquewhite">
            <h1 style="font-size: 50px"> Download in Progress </h1>
        </center>
        
    </div>

    @for ($i = 0; $i < 10; $i++)
    <div class="Download Pic">
        <center style="margin: 60px;">
            <img src="https://exp.itemku.com/wp-content/uploads/2020/10/genshin-impact-0930-758x426.jpg" class="loadingpic" alt="...">
        </center>
    
    </div>  
@endfor


</body>
</html>

@include('footer')