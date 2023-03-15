<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ròm | E-Shopper</title>
    <link href="{{asset('frontend/css/error.css')}}" rel="stylesheet">
</head>
<body>
    <div id="clouds">
        <div class="cloud x1"></div>
        <div class="cloud x1_5"></div>
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div>
    <div class='c'>
        <div class='_404'>404</div>
        <hr>
        <div class='_1'>Opps</div>
        <div class='_2'>The page you're looking for doesn't exist.</div>
        <a class='btn' href='{{URL::to('/trang-chu')}}'>BACK TO HOMEPAGE</a>
    </div>
</body>
</html>