<!DOCTYPE html>
<html lang="en" xmlns:background-color="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edgem chrome=1" />
    <title>FBALL</title>
    <meta name="descripiton" content="Football application for rating footballers"/>
    <meta name="keywords" content="Football, Star, App, Classification"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Icon -->
    <link rel="stylesheet" href="../../assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet/less" type="text/css" href="../../public/ratingplayers.less">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--HEADER -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost:8000/?page=home" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" href="#"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php if(isset($_SESSION['id']))?>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost:8000/?page=home">TOP 100 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/?page=team">TEAM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/?page=player">PLAYER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/?page=settings">SETTINGS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=logout">LOG OUT</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<!--CONTENT -->
<div class="page-wraper-container">
    <div class="flex site-bar">
        <div class="cards" id="c0"></div>
        <div class="con">
            <i class="fa fa-star" data-index="0"></i>
            <i class="fa fa-star" data-index="1"></i>
            <i class="fa fa-star" data-index="2"></i>
            <i class="fa fa-star" data-index="3"></i>
            <i class="fa fa-star" data-index="4"></i>
            <i class="fa fa-star" data-index="5"></i>
            <i class="fa fa-star" data-index="6"></i>
            <i class="fa fa-star" data-index="7"></i>
            <i class="fa fa-star" data-index="8"></i>
            <i class="fa fa-star" data-index="9"></i>
        </div>
        <div class="rate"><span class="ocena">0/10</span></div>
        <?php echo round($avg, 2) ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" href="#"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous" href="#"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" href="#"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" href="#"></script>
<script src="../../public/js/script.js" href="#"></script>
<script src="../../public/js/ratingplayers.js" href="#"></script>
</body>
</html>