<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">
    <title>Hall Info</title>
</head>
<body>
<div class="topnav">
  <a class="active" href="#home">Link 1</a>
  <a href="#news">Link 2</a>
  <a href="#contact">Link 3</a>
  <a href="#about">Link 4</a>
</div>
<div class="container mt-5">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Registration</th>
                    <th scope="col">Hall</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $stu)
                <tr>
                    <th>{{$stu->name}}</th>
                    <th>{{$stu->reg}}</th>
                    <th>{{$stu->hall}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="{{url('/home')}}"method="Post">
                    @csrf
                    <button type="submit" class="btn btn=primary">Back</button>
                </form>
            </div>
        </div>
        
</div>
</div>
</body>
</html>