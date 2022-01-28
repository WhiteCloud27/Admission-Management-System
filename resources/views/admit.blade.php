<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    .txt-center {
      text-align: center;
    }

    .border- {
      border: 1px solid #000 !important;
    }

    .padding {
      padding: 15px;
    }

    .mar-bot {
      margin-bottom: 15px;
    }

    .admit-card {
      border: 2px solid #000;
      padding: 15px;
      margin: 20px 0;
    }

    .BoxA h5,
    .BoxA p {
      margin: 0;
    }

    h5 {
      text-transform: uppercase;
    }

    table img {
      width: 100%;
      margin: 0 auto;
    }

    .table-bordered td,
    .table-bordered th,
    .table thead th {
      border: 1px solid #000000 !important;
    }
  </style>
  <title>Admit Card</title>



</head>

<body>

  <section>
    <div class="container">
      <div class="admit-card">
        <div class="BoxA border- padding mar-bot">
          <div class="row">
            <div class="col-sm-4">
              <h5>
                Jahangirnagar University</h5>
              <p>Savar, Dhaka-1342 <br>Bangladesh</p>
            </div>
            <div class="col-sm-4 txt-center">
              <img src="{{ public_path("/images/Jahangirnagar_University_(emblem).png") }}" width="120px;" />
            </div>
            <div class="col-sm-4">
              <h5>Admit Card</h5>
              <p>1st Year Undergraduate Admission Test 2022-2023</p>
            </div>
          </div>
        </div>

        @foreach($students as $stu)

        <div class="BoxC border- padding mar-bot">
          <div class="row">
            <div class="col-sm-6">
              <h5>Exam Roll No : {{$stu->examroll}}</h5>
            </div>
          </div>
        </div>
        <div class="BoxD border- padding mar-bot">
          <div class="row">
            <div class="col-sm-10">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td><b>Application ID : {{$stu->examroll}}</b></td>
                    <td><b>Unit: </b> {{$stu->unit}}</td>
                  </tr>
                  <tr>
                    <td><b>Student Name: </b>{{$stu->name}}</td>
                    <td><b>Sex: </b>Male</td>
                  </tr>
                  <tr>
                    <td><b>Father's Name: </b>{{$stu->fathersname}}</td>
                    <td><b>Date of Birth: </b>02 Jul 2019</td>
                  </tr>
                  <tr>
                    <td><b>Mother's Name: </b>{{$stu->mothersname}}</td>
                    <td><b>Session: </b>2022-2023</td>
                  </tr>
                </tbody>
              </table>
            </div>
            @endforeach
            <div class="col-sm-2 txt-center">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th scope="row txt-center"><img src="\public\images\1602105262355.jpg" width="130px" height="140px" /></th>
                  </tr>
                  <tr>
                    <th scope="row txt-center"><img src="" /></th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="BoxE border- padding mar-bot txt-center">
          <div class="row">
            <div class="col-sm-12">
              <h5>Examination Date & time</h5>
              <p>Date: 25/01/2022 <br> Time: 10:00 AM</p>
            </div>
          </div>
        </div>
        <div class="BoxF border- padding mar-bot">

          <h5 ALIGN="center">Rules for the candidate</h5>
          <div class="ml-2">
            <p>
              1.Candidates must bring the Admit Card and show it to the invigilator(s) on duty.<br>

              2.Candidates are NOT ALLOWED to bring mobile phone/calculator/digital watch or similar electronic devices in the exam hall.<br>

              3.Photograph contained in this admit card will be verified against the original submitted application form.<br>

              4.Candidates must sit in the examination hall at least 30 minutes prior to all examination. Candidates will not be allowed to leave the examination hall before
              the termination of the test<br>

              5.Candidates should bring two Black Ballpoint Pens. Use of pencil is not allowed.<br>

              6.Applicant will be expelled if the general instructions are not followed or if found guitty of misconduct, misbehavior or adopting unfair means. <br>

            </p>
          </div>

        </div>
        <footer class="txt-center">
          <p>Jahangirnagar University<br>
            Savar,Dhaka-1342</p>

        </footer>

      </div>
    </div>

  </section>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>