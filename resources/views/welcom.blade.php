<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">
    <title>Admin</title>
</head>
<body>
<div class="topnav">
  <a class="active" href="#home">Link 1</a>
  <a href="#news">Link 2</a>
  <a href="#contact">Link 3</a>
  <a href="#about">Link 4</a>
</div>    
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form action=""method="POST">
                 @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                 </div>
                 <div class="mb-3">
                    <label for="reg" class="form-label">Registration</label>
                    <input type="text" class="form-control" id="reg" name="reg">
                </div>
                    <div class="mb-3">
                        <label for="hall" class="form-label">Hall</label>
                        <input type="text" class="form-control" id="hall" name="hall">
                    </div>
                    <button type="submit" class="btn btn=primary">Submit</button>
             </form>
        </div>
     </div>
    <br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Registration</th>
                <th scope="col">Hall</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
             @foreach($students as $stu)
              <tr>
                  <th>{{$stu->id}}</th>
                   <th>{{$stu->name}}</th>
                  <th>{{$stu->reg}}</th>
                  <th>{{$stu->hall}}</th>
                  <td>
                      <a href="{{url('/edit',$stu->id)}}" class="btn btn-nfo btn-sm">Edit</a>
                     <a href="{{url('/delete',$stu->id)}}" class="btn btn-danger btn-sm">Delete</a>
                   </td>
             </tr>
              @endforeach
         </tbody>
     </table>
 </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>