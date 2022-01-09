<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FAQ</title>
    <style type="text/css">
		body
		{
			background-color: #909497;
		}
		h2
		{
			text-align: center;
			color: white;
		}
		div
		{
			margin:40px 200px 40px 200px;
			background-color: white;
			padding: 10px;
		}
		.Question
		{
			color: green;
			font-weight: bold;
		}
	</style>
</head>
<body >
<h2>সাধারণ জিজ্ঞাসা</h2>   
@foreach($faq as $element)
<div>
    <p class="Question">প্রশ্ন {{$element->id}}: {{$element->question}}</p>
    <p>উত্তরঃ  {{$element->answer}}</p>
</div>
@endforeach
</body>
</html>

