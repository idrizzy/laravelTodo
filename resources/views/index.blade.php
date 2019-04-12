<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <script src="{{ asset('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" mt="5">
                <div class="container bg bg-info">
                    <nav class="navbar navbar navbar-inverse">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">To Do App  </a>
                            </div>
                            <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Edit To Do</a></li>
                            </ul>
                        </div>
                    </nav>
                    <form action="/post" method="POST">
                    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="desc">Description</label>
                                    <input type="text" class='form-control' name="todo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="desc">Date</label>
                                    <input type="date" class='form-control' name="desc">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="desc">Time</label>
                                    <input type="time" class='form-control' name="desc">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group"><p><br></p>
                                    <input type="submit" class='btn btn-primary pull-right' value="create TODO">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            {{$errors}}
                        </div>
                        @endif
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>To Do</th>
                                    <th>Time</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(!empty($todos))
                                @foreach($todos as $todo)
                                <tr>
                                    <td>{{$todo->id}}</td>
                                    <td>{{$todo->todo}}</td>
                                    <td>{{$todo->time}}</td>
                                    <td>{{$todo->date}}</td>
                                    <td style="width:15%;">
                                        <a href=""class="btn btn-primary">Edit</a>
                                        <a href=""class="btn btn-danger">Delete</a>
                                    </td>
                                </tr> 
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>