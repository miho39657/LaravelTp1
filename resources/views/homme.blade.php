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
            div *{
                text-align :center;
            }
            h3{
                color: #178f49;
            }
            button{
                width: 20%;
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
        <h1>Homme page </h1>
        <h3>Title description </h3>
        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam, neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla non fringilla.</p>
        <button onclick="location.href='{{url('contact')}}'">Contact</button>
        <div>
    </body>
</html>
