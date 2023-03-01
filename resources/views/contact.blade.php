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
            h1{
                text-align : center;
            }
            input[type=text], textarea {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                }

                input[type=submit] {
                width: 50%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px auto;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                display : block
                }

                input[type=submit]:hover {
                background-color: #45a049;
                }

                div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                margin : 40px

                }
         </style>
    </head>
    <body class="antialiased">
        <div>
        <h1>Contact page </h1>
        <form method= "POST" action="/thankyou">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email..">

            <label for="msg">Message</label>
            <textarea id="msg" name="msg" placeholder="Write a message.." style="height:200px"></textarea>
        
            <input type="submit" value="Submit">
        </form>
        </div>
    </body>
</html>