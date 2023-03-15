<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" ></script>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Payment Success <i class="fa fa-check"></i></h2>
        <img src="{{asset('frontend/images/home/romf.png')}}">
        <h3>Dear customer, </h3>
        
            <p style="font-size:20px;color:#5C5C5C;">
                Your Transaction ID is: {{$id}} </p>
                <h2>🥰 Thanks for shopping 🥰</h2>
        <a href="{{route('front..home.index')}}" class="btn btn-success">     Return to shop      </a>
    <br><br>
        </div>
        
	</div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ròm Pet Shop</title>
    <link href="{{asset('/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
</head>
<body>
    
</body>
</html>