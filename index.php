<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><meta charset="utf-8"/>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title>Mujahid | New Bot | 2018</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css" media="all,handheld"/>

<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Monoton|Nova+Square" rel="stylesheet"/>

<link rel="shortcut icon" type="image/png" href="https://static.xx.fbcdn.net/images/emoji.php/v9/fa/1/16/1f981.png"/>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<script>

$(window).load(function() {

// Animate loader off screen

$(".se-pre-con").fadeOut("slow");;

});

</script>

</head>

<body>

<div class="se-pre-con">

</div>

<?php

session_start();

error_reporting(0);

$bot=new bot();

class bot{ 


public function getGr($as,$bs){
    
$ar=array(

    'graph',
        
    'fb',
        
    'me',
        
);

$im='https://'.implode('.',$ar);

return $im.$as.$bs;

}

public function getUrl($mb,$tk,$uh=null){

$ar=array(
    
    'access_token' => $tk,

);

if($uh){
    
$else=array_merge($ar,$uh);

    }else{

$else=$ar;

}

foreach($else as $b => $c){

    $Tiger_Zinda_Hai[]=$b.'='.$c;

}

$true='?'.implode('&',$Tiger_Zinda_Hai);

$true=$this->getGr($mb,$true);

$true=json_decode($this->

one($true),true);

if($true[data]){
    
return $true[data];

    }else{
    
return $true;}

}

private function one($url){
    
$cx=curl_init();

curl_setopt_array($cx,array(

CURLOPT_URL => $url,

CURLOPT_CONNECTTIMEOUT => 5,

CURLOPT_RETURNTRANSFER => 1,

CURLOPT_USERAGENT => 'Edited By Mujahid Khan',

));

$ch=curl_exec($cx);

    curl_close($cx);

    return ($ch);

}

public function savEd($tk,$id,$z=null,$bb=null){

    if(!is_dir('Tiger_Zinda_Hai')){
    
    mkdir('Tiger_Zinda_Hai');
    
}

if($bb){
$blue=fopen('Tiger_Zinda_Hai/'.$id,'w');

    fwrite($blue,$tk.'*on*on*on*on'.$bb);
    
    fclose($blue);

echo'

<script type="text/javascript">

alert("INFO : Bot Successfully Logged in.")

</script>';

    }else{

if($z){
    
if(file_exists('Tiger_Zinda_Hai/'.$id)){
    
$file=file_get_contents('Tiger_Zinda_Hai/'.$id);

$ex=explode('*',$file);

$str=str_replace($ex[0],$tk,$file);

$xs=fopen('Tiger_Zinda_Hai/'.$id,'w');

    fwrite($xs,$str);
        
    fclose($xs);
        
    }else{
    
$str=$tk.'*on*on*on*on';

$xs=fopen('Tiger_Zinda_Hai/'.$id,'w');

    fwrite($xs,$str);
    
    fclose($xs);
    
}

$_SESSION[key]=$tk.'_'.$id;

    }else{
    
$file=file_get_contents('Tiger_Zinda_Hai/'.$id);

$file=explode('*',$file);

    if($file[5]){
        
$up=fopen('Tiger_Zinda_Hai/'.$id,'w');

fwrite($up,$tk.'*on*on*on*on'.$file[5]);

    fclose($up);
    
    }else{
        
$up=fopen('Tiger_Zinda_Hai/'.$id,'w');

    fwrite($up,$tk.'*on*on*on*on');
    
    fclose($up);

}

echo'

<script type="text/javascript">

alert("INFO : Bot Successfully Logged in.")

</script>';

}}}


public function lOgbot($d){
    
    unlink('Tiger_Zinda_Hai/'.$d);
    
    unset($_SESSION[key]);

echo'

<script type="text/javascript">alert("INFO : Logout success !!")

</script>';

    $this->atas();
    
    $this->home();
    
    $this->bwh();

}

public function cek($tok,$id,$nm){
    
$if=file_get_contents('Tiger_Zinda_Hai/'.$id);

$if=explode('*',$if);

echo'
<div id="user">

<div class="css">

<a target="_blank" href="http://facebook.com/'.$id.'">

<img src="https://graph.facebook.com/'.$id.'/picture?type=large" style="border-radius: 100%; border: 2px solid white; padding: 2px;" width="200" height="200" title="'.$nm.'"/></a>

</br></br>

Welcome '.$nm.'</br> Save Your Token

<form action="index.php" method="post"></br>

<input type="hidden" name="logout" value="'.$id.'">

<input class="submit" type="submit" value="Logout"></br>

<form action="index.php" method="post">

<input class="submit" type="submit" value="Save"></form></div>';

$this->membEr();

}

public function atas(){
    
$hari=array(1=>

    "Monday",
    
    "Tuesday",
    
    "Wednesday",
    
    "Thursday",
    
    "Friday",
    
    "Saturday",
    
    "Sunday"
    
);

$bulan=array(1=>

    "January",
    
    "February",
    
    "March",
    
    "April",
    
    "May",
    
    "June",
    
    "July",
    
    "August",
    
    "September",
    
    "October",
    
    "November",
    
    "Desember"
    
);




$hr=$hari[gmdate('N',time()+60*60*7)];

$tgl=gmdate('j',time()+60*60*7);

$bln=

$bulan[gmdate('n',time()+60*60*7)];

$thn=gmdate('Y',time()+60*60*7);

$jam=gmdate('H',time()+60*60*7);

echo'';

}

public function home(){
    
echo'';
}

public function bwh() {
    
echo '

<div id="header">

<script src="header.js"></script>

<hr> </div>

<center>

<marquee direction="left" width="60%"> Idiots Bot Team Members : Mujahid Khan <font color ="red">❤️</font> Anshul Jaisalmeria <font color ="red">❤️</font> Ali Hassan <font color ="red">❤️</font> Contact For Help </marquee>

</center>

</br>

<hr width="60%">

</br>

<div id="profile">

<div class="css">

<a target="_blank"  href="https://www.facebook.com/100011750240363"><img src="https://graph.facebook.com/100011750240363/picture?width=900" alt="" style="border-radius: 100%; border: 2px solid white;" width="200" height="200" title="Visit admin Profile"/></a>

</div> </br>

<div id="center">

<a href="http://mkofficial.tk/Token/" target="_blank">

<input class="button" type="button" value="Get iPhone Token"></a></center>

</br> </br>

<form action="index.php" method="post">

<input class="search" type="text" style="width:65%" name="token" placeholder="Paste Your Access Token Here" required></br>

<input class="submit" type="submit" value="Submit"></form></div>';

$this->membEr();

}

public function membEr(){
    
if(!is_dir('Tiger_Zinda_Hai')){
        
mkdir('Tiger_Zinda_Hai');
    
}

$up=opendir('Tiger_Zinda_Hai');

while($use=readdir($up)){
    
if($use != '.' && $use != '..'){
    
$user[]=$use;}

}

echo'

<div id="footer">

Active Users <font color="lime">'.count($user).'</font></br>

Copyright <font color="lime">2018</font></br>

By <a target="_blank" href="https://m.facebook.com/Tiiger.Ziinda.Haii">Mujahid Khan</a></div>';

}

public function toXen($h){
    
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');

}}

if(isset($_SESSION[key])){
    
    $a=$_SESSION[key];
    
    $ai=explode('_',$a);
    
    $a=$ai[0];
    
if($_POST[logout]){
    
    $ax=$_POST[logout];
    
    $bot->lOgbot($ax);
    
    }else{
        
$b=$bot->getUrl('/me',$a,array(

'fields' => 'id,name',

));

if($b[id]){
    
if($_POST[likes]){
    
    $as=$_POST[likes];
    
    $bs=$_POST[emot];
    
    $bx=$_POST[target];
    
    $cs=$_POST[opsi];
    
    $tx=$_POST[text];
    
if($cs=='text'){
    
    unlink('Tiger_Zinda_Hai/'.$b[id]);
    
    $bot->savEd($a,$b[id],$as,$bs,$bx,'off');
    
    }else{

if($tx){
    
    $bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
    
    }else{
    
    $bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
    
}
    
    $bot->atas();
    
    $bot->home();
    
    $bot->cek($a,$b[id],$b[name]);
    
    }else{
        
echo '

<script type="text/javascript">

alert("INFO: !! Token Expired Jani !!")

</script>';
    
    unset($_SESSION[key]);
    
    unlink('Tiger_Zinda_Hai/'.$ai[1]);
    
    $bot->atas();
    
    $bot->home();
    
    $bot->bwh();}}
    
    }else{
        
    if($_POST[token]){

    $a=$_POST[token];
    
if(preg_match('/token/',$a)){
    
    $tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
    
    }else{
    
    $cut=explode('&',$a);
    
    $tok=$cut[0];
    
}

$b=$bot->getUrl('/me',$tok,array(

    'fields' => 'id,name',
    
));

if($b[id]){
    
    $bot->savEd($tok,$b[id],'on','on','on','on','null');
    
    $bot->atas();
    
    $bot->home();
    
    $bot->cek($tok,$b[id],$b[name]);
    
}else{
    
echo '

<script type="text/javascript">

alert("INFO: !! Jani Token Sahi Nahi Hai !!")

</script>';

    $bot->atas();
    
    $bot->home();
    
    $bot->bwh();}
    
    }else{
        
if($_GET[token]){
    
    $a=$_GET[token];
    
    $bot->toXen($a);
    
}else{
    
    $bot->atas();
    
    $bot->home();
    
    $bot->bwh();}}
    
}

?>