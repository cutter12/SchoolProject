<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid">

<!-- navbar -------------->
<nav class="navbar navbar-expand-md navbar-light bg-ligh">
<a href="#" class="navbar-brand">
<img src="<?php echo base_url('image/logo.png');?>" class="img-fluid" style="width:50px;height:50px;" alt="">
</a>
<button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#demo">
<span class="navbar-toggler-icon"></span>
</button>


<div class="collapse navbar-collapse" id="demo">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="" class="nav-link">Profile</a></li>
        <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="" class="nav-link">About US</a></li>
    </ul>
</div>
</nav>

<!-- Carousel Slide --->
<div class="carousel slide" id="slides" data-ride="carousel">
<ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="acitve"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
</ul>
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="<?php echo base_url('image/carousel_image1.jpg');?>" class="img-fluid" alt="">
        <div class="carousel-caption">
            <h3>Khemmarat</h3>
            <h4>Welcome to Khemmarat in Ubonratchatani</h4>
        </div>
    </div>
    <div class="carousel-item">
        <img src="<?php echo base_url('image/carousel_image2.jpg');?>"  class="img-fluid" alt="">
    </div>
    <div class="carousel-item">
        <img src="<?php echo base_url('image/carousel_image3.jpg');?>" alt="" class="img-fluid">
    </div>
</div>
</div>
</div>
</div>
</body>
</html>