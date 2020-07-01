<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Tasks</title>
</head>
<body>
    <h1 class="container">Tasks</h1>
    <form class="container form-group" action="/tasks" method="POST">
        {{csrf_field()}}
        <div>
        <input type="text" name="title" required class="form-control" placeholder="Enter your Tasks">
        </div>
        <br>
        <div>
        <button class="btn btn-success">Add Task</button>
        </div>

    </form>
</body>
</html>