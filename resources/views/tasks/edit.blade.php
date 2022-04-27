

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Edit</title>
</head>
<body>

    <div class="container">
        
    
    <form action="/uptask" method="post">
        {{ csrf_field() }}
            <div class="text-center">
                    <div class="form-group">
                <br>
                    <input type="text"  class="form-control" name="task" value="{{$editdata->task}}">
                <br>
                    <input type="submit" class="btn btn-primary" value="update">
                    <input type="hidden" name="id" value="{{$editdata->id}}">
                    &nbsp;&nbsp; <a href="/tasks" type="button" class="btn btn-danger">Cancel</a>
        <input type="reset" class="btn btn-warning" value="Clear">
        
            </div>
            </div>
    </form>
    </div>
</body>
</html>