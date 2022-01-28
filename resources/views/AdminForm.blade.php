<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style type="text/css">
        .Form{
            margin: 50px 300px 50px 300px;
            }
        .Button{
            padding: 10px;
            background: black;
            font-weight: bold;
            color: white;
        }
        
    </style>
    <title>Form</title>
</head>
<body>
<form action="AdminForm" method="POST">
    @csrf
<div class="Form">
    <div>
    <label for="question">Question</label>
     <textarea id="question" name="question" rows="10" cols="100"></textarea>
    </div>

    <div>
    <label for="anser">Answer</label>
    <textarea id="answer" name="answer" rows="10" cols="100"></textarea>
    </div>
   
  
    <div>
    <button type="submit" class="Button">SUBMIT</button>
    </div>
</div>
   
    
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>