<?php 

//echo decode('OVZtMHhkMUl5UlhkT1ZXaFRZbXR3VUZadE1XOVdSbXh5V2tjNVYxSnRlSGxYYTJNMVlXc3hWMWR1YUZkU2VrRXhWbXhhUzJNeVRrbGlSbVJwVW10d1NWWnNVa3RUTVVsNFZHNU9hRkp0VWxoYVYzUkhUa1phY2xwRVVscFdiSEJZVmpJMVQxZEhTa2RqU0VKV1lsaFNNMVpHV21Gak1WcDBVbXh3VjJGNlZrbFhWRUpYVmpGYWRGTnJaRmhpVkd4V1ZtMTRZVTB4Y0ZaWGJYUllVakZLU0ZZeU1UUlZNREZGVm14c1YwMXVVblpWYWtaWFpFWktXV05HV21sU01taFlWMWQwWVZNeFpFZFdia1pUWWxWYVZGUldXbmRsYkZwSVpVVjBhRkl4V25wV01uaFRWakZhVjJOR1RtRlNSVnBFVmxkNFExWlZNVVZOUkRBOQ%3D%3D');
echo encode('mobile=18551698147&t=009',9);


function decode($str){
    $str = urldecode($str);
    $str = base64_decode($str);
    $count = $str{0};
    $str = substr($str, 1);
    for($i = 1; $i <$count; $i++){
        $str = base64_decode($str);
    }
    return urldecode($str);
}

function encode($str, $count){
    $str = urlencode($str);
    for($i = 1; $i <$count; $i++){
        $str = base64_encode($str);
    }
    $str = $count.$str;
    $str = base64_encode($str);
    return urlencode($str);
dianrong.com
}
 ?>
}

