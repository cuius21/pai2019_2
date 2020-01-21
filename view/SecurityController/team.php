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
    <link rel="stylesheet/less" type="text/css" href="../../public/team.less">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--HEADER -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost:8000/?page=top100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" href="#"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php if(isset($_SESSION['id']))?>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost:8000/?page=top100">TOP 100 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">TEAM</a>
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
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t1" href="?page=teamsplayers&id_team=1"></a><div id="team_name">FC Barcelona</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t2" href="?page=teamsplayers&id_team=2"></a><div id="team_name">Real Madrid</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t3" href="?page=teamsplayers&id_team=3"></a><div id="team_name">Juventus FC</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t4" href="?page=teamsplayers&id_team=4"></a><div id="team_name">PSG</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t5" href="?page=teamsplayers&id_team=5"></a><div id="team_name">LOSC</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t6" href="?page=teamsplayers&id_team=6"></a><div id="team_name">Olympique Lyonnais</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t7" href="?page=teamsplayers&id_team=7"></a><div id="team_name">Atletico Madrid</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t8" href="?page=teamsplayers&id_team=28"></a><div id="team_name">Valencia</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t9" href="?page=teamsplayers&id_team=29"></a><div id="team_name">Sevilla</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t10" href="?page=teamsplayers&id_team=30"></a><div id="team_name">Real Sociedad</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t11" href="?page=teamsplayers&id_team=8"></a><div id="team_name">Arsenal FC</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t12" href="?page=teamsplayers&id_team=9"></a><div id="team_name">Chelsea FC</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t13" href="?page=teamsplayers&id_team=10"></a><div id="team_name">Manchester United</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t14" href="?page=teamsplayers&id_team=11"></a><div id="team_name">Manchester City</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t15" href="?page=teamsplayers&id_team=12"></a><div id="team_name">Liverpool FC</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t16" href="?page=teamsplayers&id_team=13"></a><div id="team_name">Tottenham Hotspur</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t17" href="?page=teamsplayers&id_team=14"></a><div id="team_name">Bayern Munchen</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t18" href="?page=teamsplayers&id_team=15"></a><div id="team_name">Borussia Dortmund</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t19" href="?page=teamsplayers&id_team=16"></a><div id="team_name">AC Milan</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t20" href="?page=teamsplayers&id_team=17"></a><div id="team_name">FC Internazionale Milano</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t21" href="?page=teamsplayers&id_team=18"></a><div id="team_name">AS Roma</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t22" href="?page=teamsplayers&id_team=19"></a><div id="team_name">SSC Napoli</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t23" href="?page=teamsplayers&id_team=20"></a><div id="team_name">Olympique de Marseille</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t24" href="?page=teamsplayers&id_team=21"></a><div id="team_name">AS Monaco</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t25" href="?page=teamsplayers&id_team=22"></a><div id="team_name">Athletic Bilbao</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t26" href="?page=teamsplayers&id_team=23"></a><div id="team_name">Villarreal</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t27" href="?page=teamsplayers&id_team=24"></a><div id="team_name">Leicester City FC</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t28" href="?page=teamsplayers&id_team=25"></a><div id="team_name">Bayer 04 Leverkusen</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t29" href="?page=teamsplayers&id_team=26"></a><div id="team_name">Borussia Mönchengladbach</div></div>
        <div class="col-12 col-md-4 col-lg-2  block"><a class="t30" href="?page=teamsplayers&id_team=27"></a><div id="team_name">FC Schalke 04</div></div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" href="#"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous" href="#"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" href="#"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" href="#"></script>
<script src="../../public/js/script.js" href="#"></script>
</body>
</html>