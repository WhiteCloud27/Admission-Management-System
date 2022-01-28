<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contact Us</title>
</head>

<body>
    
        <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h5>Contact Us</h5>
                        </div>
                        <div class="card-body">
                            @if(Session::has('message_sent'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message_sent')}}
                            </div>
                            @endif
                            <form method="POST" enctype="multipart/form-data" action="{{route('contact.send')}}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name" class="mb-1">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email" class="mb-1">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="phone" class="mb-1">Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="message" class="mb-1">Message</label>
                                    <textarea name="message" id="" cols="30" rows="8" class="form-control"></textarea>
                                </div>

                                <button type="submit" class="btn btn-warning mb-2">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>