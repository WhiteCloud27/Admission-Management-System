<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url("/") }}">JU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url("/applynow") }}">Apply Now</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to("/admitdownload")}}">Admit</a>
            </li>
            
            <!-- <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route("about.page")}}">About</a>
            </li> -->
            
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ url("/Faq") }}">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url("/candidate") }}">Get Result</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url("/userseatplan") }}">Seat Plan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url("/noticeboard") }}">Notice Board</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url("/hallallocation") }}">Hall Allocation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url("/choosesubject") }}">Choose Subject</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url("/getadmitform") }}">Admit Now</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Others
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>

          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>

</html>