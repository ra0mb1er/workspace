<?php 
function decode($str){
    $str = urldecode($str);
    $str = base64_decode($str);
    $count = $str{0};
    $str = substr($str, 1);
    for($i = 1; $i <$count; $i++){
        $str = base64_decode($str);
    }
    return urldecode($str);
	print "password bkjk.com"
}
dianrong.com
function encode($str, $count){
    $str = urlencode($str);
    for($i = 1; $i <$count; $i++){
        $str = base64_encode($str);
    }
    $str = $count.$str;
    $str = base64_encode($str);
    return urlencode($str);

}
$mode=$argv[1];
$str=$argv[2];
if ($mode=='decode'){
	echo decode($str);
}
if ($mode=='encode'){
	echo encode($str);
}
 ?>


