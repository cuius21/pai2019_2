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
    <link rel="stylesheet/less" type="text/css" href="../../public/top100.less">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--HEADER -->
<?php
session_start(); ?>
<?php $_SESSION['id']; ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">TOP 100 <span class="sr-only">(current)</span></a>
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
        <div class="col-12 col-md-4 column-top100">
            <div class="top100"></div>
            <?php if(isset($player)): ?>
            <?php $i = 1; ?>
            <?php foreach($player as $p): ?>
                <div class="position"><?php echo $i?></div>
                <div class="cards"><img src="../../assets/players/<?= $p['id_player'];?>.png"></div>
                    <ul class="cardsinfo">
                        <li class="info"><a href="?page=ratingplayers&id_player=<?= $p['id_player'];?>"><?= round($p['AVG(Rating.rating)'], 1);?> <i class="fa fa-star"></i><?= $p['name'], ' ', $p['surname'];?></a></li>
                    </ul>

                    <?php $i = $i+1; ?>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        <div class="col-12 col-md-4 column-laliga">
            <div class="spanish"></div>
            <?php if(isset($laligaplayer)): ?>
            <?php $j = 1; ?>
            <?php foreach($laligaplayer as $llp): ?>
            <div class="position"><?php echo $j?></div>
            <div class="cards"><img src="../../assets/players/<?= $llp['id_player'];?>.png"></div>
            <ul class="cardsinfo">
                <li class="info"><a href="?page=ratingplayers&id_player=<?= $llp['id_player'];?>"><?= round($llp['AVG(Rating.rating)'], 1);?> <i class="fa fa-star"></i><?= $llp['name'], ' ', $llp['surname'];?></a></li>
            </ul>
            <?php $j = $j+1;?>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-4 column-premier">
            <div class="england"></div>
            <?php if(isset($premierleagueplayer)): ?>
            <?php $k = 1; ?>
            <?php foreach($premierleagueplayer as $plp): ?>
                    <div class="position"><?php echo $k?></div>
                    <div class="cards"><img src="../../assets/players/<?= $plp['id_player'];?>.png"></div>
                    <ul class="cardsinfo">
                        <li class="info"><a href="?page=ratingplayers&id_player=<?= $plp['id_player'];?>"><?= round($plp['AVG(Rating.rating)'], 1);?> <i class="fa fa-star"></i><?= $plp['name'], ' ', $plp['surname'];?></a></li>
                    </ul>
                    <?php $k = $k+1;?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../../public/js/script.js"></script>
</body>
</html>