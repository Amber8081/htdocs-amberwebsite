<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Jost:wght@500&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Dream Locations</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacts</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.pinimg.com/originals/2d/ec/b9/2decb99a6ae593357d95e6a8df544b3e.jpg" alt="Los Angeles" width="100%" height="560px">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://www.wallpapertip.com/wmimgs/83-837348_4k-wallpaper-portrait-nature.jpg" alt="Chicago" width="100%" height="560px">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://www.wallpapertip.com/wmimgs/52-523696_autumn-path-new-england-fence-trees-green-forest.jpg" alt="New York" width="100%" height="560px">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
<div class="py-5">
<h2 class ="text-center">About Us</h2>
</div>
<div class ="container-fluid">
<div class ="row" >
<div class="col-lg-6 col-md-6 col 12">
<img src="https://www.hdwallpapers.in/download/autumn_park_scenery_5k-1920x1080.jpg" class="img-fluid">
</div>
<div class="col-lg-6 col-md-6 col 12">
<h2 class="display-9"> Explore The Nature </h2>
<p class="py-7">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur veritatis accusamus voluptatem quas harum sit laboriosam error ipsa optio atque repellat eligendi, omnis exercitationem quia facilis unde maiores quasi necessitatibus!</p>
<a href="about.php" class="btn btn-success">Check More</a>
</div>
</div>
</div>
</section>
<section class="my-5">
<div class="py-5">
<h2 class ="text-center">Our Services</h2>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card">
  <img class="card-img-top" src="https://cdn.pixabay.com/photo/2014/02/27/16/10/tree-276014__340.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beauty Of Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
    <div class="card">
  <img class="card-img-top" src="https://cdn.pixabay.com/photo/2014/02/27/16/10/tree-276014__340.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beauty Of Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
    <div class="card">
  <img class="card-img-top" src="https://cdn.pixabay.com/photo/2014/02/27/16/10/tree-276014__340.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beauty Of Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
</div>
</div>
</section>

<section class="my-5">
<div class="py-4">
<h2 class ="text-center">Gallery</h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<img src="https://cdn.pixabay.com/photo/2017/03/02/16/54/iceland-2111811__340.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="https://cdn.pixabay.com/photo/2016/03/21/10/44/desert-1270345__340.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="https://cdn.pixabay.com/photo/2018/02/27/23/03/autumn-3186876__340.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="https://cdn.pixabay.com/photo/2021/02/05/07/35/winter-5983671__340.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="https://cdn.pixabay.com/photo/2019/12/02/07/07/autumn-4667080__340.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="https://cdn.pixabay.com/photo/2018/01/21/01/17/waters-3095682__340.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="https://cdn.pixabay.com/photo/2017/12/22/11/09/schilthorn-3033448__340.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="https://cdn.pixabay.com/photo/2018/10/19/12/14/wintry-3758523__340.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="https://cdn.pixabay.com/photo/2015/06/19/21/24/avenue-815297__340.jpg" class="img-fluid pb-3">
</div>
</div>
</div>
</section>

<section class="my-5">
<div class="py-5">
<h2 class ="text-center">Contacts</h2>
</div>
<div class="w-50 m-auto">
<form action="userinfo.php" method="post">
<div class="form-group">
<label>UserName</label>
<input type="text" name="user" autocomplete="off" class="form-control">

</div>
<div class="form-group">
<label>Email id</label>
<input type="text" name="email" autocomplete="off" class="form-control">

</div>
<div class="form-group">
<label>contact number</label>
<input type="text" name="contact" autocomplete="off" class="form-control">

</div>
<div class="form-group">
<label>comment</label>
<textarea class="form-control" name="comment">
</textarea>
</div>
<button type="submit" class="btn btn-success">Submit</button>


  </form>
  <div>

  </section>
  <footer>
  <p class="p-3 bg-dark text-white text-center">@amberdesigning</p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
  </html>
