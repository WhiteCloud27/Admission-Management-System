<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contact Form</title>
</head>

<body>
    <h2>Message from {{$details['name']}}</h2>

    <p><b>Name:</b> {{$details['name']}}</p>
    <p><b>Email:</b> {{$details['email']}}</p>
    <p><b>Phone:</b> {{$details['phone']}}</p>
    <p><b>Message:</b> {{$details['message']}}</p>



    <!-- <table class="table-info" border="1">
        <thead>
            <tr class="table-warning" color="#ffc107">
                <th scope="col">Title</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Name</th>
                <td>{{$details['name']}}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{{$details['email']}}</td>
            </tr>
            <tr>
                <th scope="row">Phone</th>
                <td>{{$details['phone']}}</td>
            </tr>
            <tr>
                <th scope="row">Message</th>
                <td>{{$details['message']}}</td>
            </tr>
        </tbody>
    </table> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>