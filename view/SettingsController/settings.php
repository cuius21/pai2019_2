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
    <link rel="stylesheet/less" type="text/css" href="../../public/settings.less">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--HEADER -->

<?php if(isset($_SESSION['id']))?>
<?php if(isset($user)): ?>
<?php if(isset($countrates)): ?>
<?php if(isset($max)): ?>
<?php if(isset($min)): ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost:8000/?page=top100" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" href="#"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost:8000/?page=top100">TOP 100 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/?page=team">TEAM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/?page=player">PLAYER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SETTINGS</a>
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
        <div class="col-12 profile1">
            <div class="name"><i class="fa fa-user"></i>Hi <?php echo $user['name']; ?></div>
            <div class="ratesinfo">You have rated <?php echo $countrates['COUNT(id_star)']; ?> players<br/>
            In your opinion the best football player is <?php echo $max['name'],' ', $max['surname'] ?>. He's rate <?php echo $max['MAX(Rating.rating)']?><i class="fa fa-star"></i><br/>
            In your opinion the worst football player is <?php echo $min['name'],' ', $min['surname'] ?>. He's rate <?php echo $min['MIN(Rating.rating)']?><i class="fa fa-star"></i></div>
            <div class="col-12 col-sm-6 info">You can type two teams to check which of them should probably win</div>
            <div class="col-12 col-sm-3 comparison">
                <ul class="teams">
                    <li class="team" data-index="1">FC Barcelona</li>
                    <li class="team" data-index="2">Real Madrid</li>
                    <li class="team" data-index="3">Juventus</li>
                    <li class="team" data-index="4">PSG</li>
                    <li class="team" data-index="5">LOSC</li>
                    <li class="team" data-index="6">OL Lyon</li>
                    <li class="team" data-index="7">Atl Madrid</li>
                    <li class="team" data-index="8">Arsenal</li>
                    <li class="team" data-index="9">Chelsea</li>
                    <li class="team" data-index="10">Man UTD</li>
                    <li class="team" data-index="11">Man City</li>
                    <li class="team" data-index="12">Liverpool FC</li>
                    <li class="team" data-index="13">Tottenham</li>
                    <li class="team" data-index="14">Bayern Munchen</li>
                    <li class="team" data-index="15">Borussia Dtm</li>
                    <li class="team" data-index="16">AC Milan</li>
                    <li class="team" data-index="17">Inter Milan</li>
                    <li class="team" data-index="18">AS Roma</li>
                    <li class="team" data-index="19">SSC Napoli</li>
                    <li class="team" data-index="20">Ol Marsilie</li>
                    <li class="team" data-index="21">AS Monaco</li>
                    <li class="team" data-index="22">Ath Bilbao</li>
                    <li class="team" data-index="23">Villarreal</li>
                    <li class="team" data-index="24">Leicester City</li>
                    <li class="team" data-index="25">Bayer 04 Leverkusen</li>
                    <li class="team" data-index="26">Borussia Monchengladbach</li>
                    <li class="team" data-index="27">FC Schalke</li>
                    <li class="team" data-index="28">Valencia</li>
                    <li class="team" data-index="29">Sevilla</li>
                    <li class="team" data-index="30">Real Sociedad</li>
                </ul>
            </div>
            <div class="col-12 col-sm-3 comparison">
                <ul class="teams">
                    <li class="team2" data-index="1">FC Barcelona</li>
                    <li class="team2" data-index="2">Real Madrid</li>
                    <li class="team2" data-index="3">Juventus</li>
                    <li class="team2" data-index="4">PSG</li>
                    <li class="team2" data-index="5">LOSC</li>
                    <li class="team2" data-index="6">OL Lyon</li>
                    <li class="team2" data-index="7">Atl Madrid</li>
                    <li class="team2" data-index="8">Arsenal</li>
                    <li class="team2" data-index="9">Chelsea</li>
                    <li class="team2" data-index="10">Man UTD</li>
                    <li class="team2" data-index="11">Man City</li>
                    <li class="team2" data-index="12">Liverpool FC</li>
                    <li class="team2" data-index="13">Tottenham</li>
                    <li class="team2" data-index="14">Bayern Munchen</li>
                    <li class="team2" data-index="15">Borussia Dtm</li>
                    <li class="team2" data-index="16">AC Milan</li>
                    <li class="team2" data-index="17">Inter Milan</li>
                    <li class="team2" data-index="18">AS Roma</li>
                    <li class="team2" data-index="19">SSC Napoli</li>
                    <li class="team2" data-index="20">Ol Marsilie</li>
                    <li class="team2" data-index="21">AS Monaco</li>
                    <li class="team2" data-index="22">Ath Bilbao</li>
                    <li class="team2" data-index="23">Villarreal</li>
                    <li class="team2" data-index="24">Leicester City</li>
                    <li class="team2" data-index="25">Bayer 04 Leverkusen</li>
                    <li class="team2" data-index="26">Borussia Monchengladbach</li>
                    <li class="team2" data-index="27">FC Schalke</li>
                    <li class="team2" data-index="28">Valencia</li>
                    <li class="team2" data-index="29">Sevilla</li>
                    <li class="team2" data-index="30">Real Sociedad</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" href="#"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous" href="#"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" href="#"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" href="#"></script>
<script src="../../public/js/script.js" href="#"></script>
<script src="../../public/js/settings.js" href="#"></script>
</body>
</html>