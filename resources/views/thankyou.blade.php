<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                margin : 40px

                }
            span{
                color: #2e3130;
                text-decoration: underline;
            }
            div *{
                text-align: center;
            }
            button{
                width: 16%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px auto;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                display : block
            }
            button:hover{
                background-color: #45a049;
            }
        </style>
    </head>
    <body class="antialiased">
        <div>
        <h2>Thank you <span>{{$user->name}}</span></h2>
        <h3>Ur Email  :<span> {{$user->email}}</span></h3>
        <h4>UR Message : {{$user->msg}}</h4>
        <button onclick="location.href='{{url('')}}'">Back to homme</button>
        </div>
    </body>
</html>