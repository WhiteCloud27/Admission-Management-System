<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action=""method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="reg" class="form-label">Registration</label>
                        <input type="text" class="form-control" id="reg" name="reg" value="{{$student->reg}}">
                    </div>
                    <div class="mb-3">
                        <label for="hall" class="form-label">Hall</label>
                        <input type="text" class="form-control" id="hall" name="hall" value="{{$student->hall}}">
                    </div>
                    <button type="submit" class="btn btn=primary">Update</button>
                </form>
            </div>
        </div>
        
     </div>
</body>
</html>