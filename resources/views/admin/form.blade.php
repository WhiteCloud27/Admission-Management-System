<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Student Info</title>
</head>

<body>
    <!-- class="row g-3"  -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                    @csrf
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="col-md-6">
                        <label for="examRoll" class="form-label">Exam Roll</label>
                        <input type="text" class="form-control" id="examRoll" name="examRoll">
                    </div>
                    <div class="col-md-6">
                        <label for="fathersName" class="form-label">Father's Name</label>
                        <input type="text" class="form-control" id="fathersName" name="fathersName">
                    </div>
                    <div class="col-md-6">
                        <label for="mothersName" class="form-label">Mother's Name</label>
                        <input type="text" class="form-control" id="mothersName" name="mothersName">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <select id="unit" name="unit" class="form-select">
                            <option value="A" selected>A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                            <option value="I">I</option>
                        </select>
                    </div>
                    <!-- <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div> -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning">Insert</button>
                    </div>
                </form>

                @if(session()->has('status'))                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
                <div class="alert alert-success col-md-6 mt-3">
                    {{session('status')}}
                </div>
                @endif

            </div>


            <div class="col-md-6">
                <h5 style="text-align:center;">Student's Admit Card Information</h5>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Exam Roll</th>
                            <th scope="col">Father's Name</th>
                            <th scope="col">Mother's Name</th>
                            <th scope="col">Unit</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $stu)
                        <tr>
                            <td>{{$stu->id}}</td>
                            <td>{{$stu->name}}</td>
                            <td>{{$stu->examroll}}</td>
                            <td>{{$stu->fathersname}}</td>
                            <td>{{$stu->mothersname}}</td>
                            <td>{{$stu->unit}}</td>
                            <td>
                                <a href="{{url('/edit',$stu->id)}}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                            <td>
                                <a href="{{url('/delete',$stu->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>