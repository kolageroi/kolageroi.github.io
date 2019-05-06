<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
   
    <title>Главная</title>
</head>
<body>
    <div id="header_nav">
<div id="nav_feedback">
<a href="\feedback">Связь с нами</a>
</div>
<div id="nav">
        <a class="borderright" href="">Главная</a>
        <a href="/photos">Фото</a>
</div>

    </div>
    <div id="content">
    <div id="table">
    <?php
    function sid64_2_32($steamid64) {
    $accountID = bcsub($steamid64, '76561197960265728');
    return 'STEAM_0:'.bcmod($accountID, '2').':'.bcdiv($accountID, 2);
}


function pingD($host){
$port = 27015; $waitTimeoutInSeconds = 2; 
$tB = microtime(true); 
$fP = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds);
$tA = microtime(true); 
if($fP){$A=round((($tA - $tB) * 1000), 0)." ms";} else {$A="...";} 
fclose($fp); 
return $A;
}
function timm($time){
return floor($time / 3600)."ч ".floor(($time / 60)% 60)."м";
}
$a=file_get_contents("http://izbushechka.su/api/server");
$b=json_decode($a,true);
$ping=pingD($b['ip']);
$mg="<table border=\"10\"><tr><td> </td><td>Карта: ".$b['map']."</td><td>IP: ".$b['ip']."</td><td>Пинг: $ping</td></tr><tr><td></td><td>SteamID</td><td>Ник</td><td>Время сессии</td><td>Общее время</td><td>Ранг</td><td>Рейтинг</td></tr>";

foreach($b['players'] as $k => $v){
$fill=file_get_contents("http://izbushechka.su/api/player?steamid=".$v['steamid']);
$rrt=json_decode($fill,true);
$clr=$rrt['color'][0].','.$rrt['color'][1].','.$rrt['color'][2];
$mg.="<tr><td><span>".($k+1)."</span></td><td><a href=\"".$rrt['url']."\">".sid64_2_32($v['steamid'])."</a></td><td><span>".$v['name']."</span></td><td><span>".timm((int)$v['time'])."</span></td><td>".timm((int)$rrt['time'])."</td><td style=\"background-color: rgb(".$clr.");\">".$rrt['playergroup']."</td><td>".$rrt['rating']."</td></tr>";
}
$mg.="</table>";
print($mg);

?>
</div>




    </div>
    <div id="bottom_nav">
        
    </div>
</body>
</html>
