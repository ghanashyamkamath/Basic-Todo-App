<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

    <title>Tasks</title>
    <style>
        .completed{
            text-decoration: line-through;
        }
    </style>
</head>
<body class="bg-dark">
    <h1 class="container text-center text-light">TASKS</h1>
    <span class="container" >
    @foreach ($data as $task)
        <h3 class="container text-center">
            <br>
            <ul class="list-group">
                <li class="font-weight-bolder list-group-item" style="display:flex;"> 
                    <span class="{{ $task->is_completed ? "completed" : ""}}" style="flex:7">
                        {{ $task->title }}
                    </span>

                    <form action="/tasks/{{$task->id}}/done" method="POST" style="display: inline">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <button class="btn btn-success" style="height: 40px;">Done</button>&nbsp;
                    </form>

                    <a href="/tasks/{{$task->id}}"> 
                    <button class="btn btn-primary" style="height: 40px;">Edit</button>&nbsp;
                    </a>
                    <form action="/tasks/{{$task->id}}" method="POST" style="display: inline">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">

                        <button class="btn btn-danger" style="flex:1">Delete</button>
                    </form>
                </li> 
            </ul>
        </h3>
    @endforeach
    </span>

    <form class="container form-group" action="/tasks" method="POST">
        {{csrf_field()}}
        <div>
        <input  type="text" name="title" required class="form-control" placeholder="Enter your Tasks">
        </div>
        <br>
        <div>
        <button class="btn btn-success  animate__animated animate__wobble ">Add Task</button>
        </div>

    </form>
</body>
</html>