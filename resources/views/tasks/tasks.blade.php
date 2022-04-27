<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <div class="container">
            <a href="/" class="btn btn-default">Back</a>
        <br>
        @if (count($tasks) > 0)
        <h4> {{count($tasks).' '.'Tasks'}}</h4>
        @else
        <h4> You Have No Tasks At This Moment...!</h4>
        @endif
        <div class="text-center">

            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>

            @endforeach


        <form action="/savetask" method="post">
            {{ csrf_field() }}
        <div class="form-group">
            <br>

          <input type="text" name="task"  class="form-control" placeholder="Enter Your Task Here..." >
          <br>
          <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-warning">Clear</button>

        </div>

    </div>
    </form>

    </div>



        <div class="container">

            <br>
                <table class="table table-dark">
                        <tr>
                            <th> Daily Tasks App</th>
                        </tr>


                        <tr>
                            <th>ID</th>
                            <th>Tasks</th>
                            <th>Completed</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($tasks as $task)
                        <tr>

                        <td><button type="button" class="btn btn-primary">{{$task->id}}</button></td>
                        <td> {{$task->task}}
                            <br>
                        <small>Created {{$task->created_at}}<br>
                        </small>
                        @if ($task->iscompleted)
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%;"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Completed</div>
                        </div>
                        @else
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 100%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Running Task</div>
                        </div>
                        @endif
                        </td>
                        @if ($task->iscompleted)
                           <td><button type="button" class="btn btn-success">Completed</button></td>
                           @else
                           <td><button type="button" class="btn btn-warning">Not Completed</button></td>
                        @endif
                            @if($task->iscompleted==0)
                        <td><a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>
                            @else
                        <td><a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark As Not Completed</a>
                            @endif
                        <a href="/updatetask/{{$task->id}}" class="btn btn-info" >Update</a>
                        <a href="/deltask/{{$task->id}}" class="btn btn-danger" >Delete</a></td>
                        </tr>
                        @endforeach


                </table>
            </div>

</body>
</html>










