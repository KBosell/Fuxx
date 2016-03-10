<?php

error_reporting(0);
@set_time_limit(3);

$r       = mt_rand(1,3);
$plname  = 'Player';
$map     = '';
$avatar  = 'img/nouser.png';


$pictures = array(1,2,3);
shuffle($pictures);

if (isset($_GET['mapname']))
    $map = '<br>You will play the map: '.$_GET['mapname'];

if (isset($_GET['steamid'])) {
    $data = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX&steamids='.$_GET['steamid'];
    $f = file_get_contents($data);
    $arr = json_decode($f, true);
    if (isset($arr['response']['players'][0]['personaname']))
        $plname = $arr['response']['players'][0]['personaname'];
    if (isset($arr['response']['players'][0]['avatar']))
        $avatar = $arr['response']['players'][0]['avatar'];
    
}

?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Lobster+Two|Courgette|Cookie' rel='stylesheet' type='text/css'>

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body> 
    <div class="container">
        <div class="rules">
            
            <h1 id="title" class="bigEntrance" style="font-size: 50px;">Fuxx Gaming</h1>
            <p class="lead">
                We have Custom Taunts! Shop coming soon~!<br>
                <small>
                    <ul style="line-height: 1.6;">
                        <li>Listen to the mods/admins and the owner.</li>
                        <li><b style="color:#970610;">NO GHOSTING:</b> Ghosting by giving away <br>prop positions while dead or on the other team.</li>
                        <li><b style="color:#970610;">Don't spam:</b> Chat spam and mic spam.</li>
                        <li>No harrasment of any kind.</li>
                        <li><b style="color:#970610;">DO NOT</b> hide in dead bodies, under cars, under/behind lockers,<br> under beds, in the pools as small props or outside of the maps!</li>
                        <li><b style="color:#970610;">DO NOT</b> door block with props or by spamming e on a door.</li>
                        <li>No use of the N-word or fag/faggot.(Imediate Kick)</li>
                        <li>Don't be a fuckboy and have fun!</li>
                    </ul>
                    Join our Steam Group to stay up to date:
                    <br>
                    <code>www.steamcommunity.com/groups/<b>fuxxserver</b></code>
                </small>
            </p>

        </div>

        <div id="logo">
            <img src="img/FuxxLogoNew3.png">
        </div>
    
        <div id="user" class="well well-sm">
            <img src="<?php echo $avatar?>" alt="" class="pull-right img-circle">
            Hello, <b><?php echo $plname ?></b><?php echo $map ?><br>
        </div>

        
    </div>

    <div id="peeps">
        <div class="person">
            <div class="title"><h3>Owner</h3></div>
            <div class="pic"><img src="img/kelsey.jpg"></div>
            <div class="name">
                <p style="color:#531964">
                    <b>Nightmare:</b> The Smell of NekoElena
                </p>
            </div>
        </div>
        <div class="person">
            <div class="title"><h3>Programmer</h3></div>
            <div class="pic"><img src="img/ed.jpg"></div>
            <div class="name">
                <p style="color:#1A9C17">
                    Server Overlord: magix39
                </p>
            </div>
        </div>
        <div class="person">
            <div class="title"><h3>Admins</h3></div>
            <div class="pic"><img src="img/erick.jpg"></div>
            <div class="name">
                <p style="color:#10690F">
                    Money Admin: The Smell of Money
                </p>
            </div>
            <div class="pic"><img src="img/sin.jpg"></div>
            <div class="name">
                <p style="color:#280507">
                    Pure Evil: シMrs. Derpy Sinッ
                </p>
            </div>
        </div>
        <div class="person">
            <div class="title"><h3>Moderators</h3></div>
            <div class="pic"><img src="img/mark.jpg"></div>
            <div class="name">
                <p style="color:#0A00C3">
                    Lucky Mod: ♠♥♣Luckydawg97♠♥♣
                </p>
            </div>
            <div class="pic"><img src="img/ken.jpg"></div>
            <div class="name">
                <p style="color:#FF0013">
                    Derpy Mod: シMr. Derpy Kenッ
                </p>
            </div>
        </div>
    </div>
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
