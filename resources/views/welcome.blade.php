<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- Styles -->
        <style>
             body {
                
                
               background-image: url('storage/pic/668187.jpg');
                
               
                
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                
            }

            .position-ref {
                position: relative;
            }

          

            

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
<div class="jumbotron">
    <h1 class="display-2">  Daily Tasks App</h1>
 <div class="text-center"><p class="lead"><a href="/tasks" class="btn btn-outline-primary">View Tasks</a></p></div>
    <hr class="my-6">
    <p><h3 class="text-center">Manage Your Daily Tasks !</h3></p>
</div>
        </div>
    </body>
</html>
