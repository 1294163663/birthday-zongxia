<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/26 0026
 * Time: 下午 18:13
 */


//step4:获取查询成绩的链接,以及姓名学号
$url='http://gz.bendibao.com/life/2016625/217874.shtml';
$ch2 = curl_init($url);
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec($ch2);
curl_close($ch2);


$pattern = "/tr>(.*)<\/tr>/Us";
preg_match_all($pattern, $contents , $match1);

$score = $match1[1];

print_r($score);
//$pattern_xy_val = "/value=\"(.*)\">(.*)<\/option>/U";
//preg_match_all($pattern_xy_val, $match_xy[1][0] , $match_xy_val);
//print_r($match_xy_val[1]); //获得了各学院的id,一共23个


//$url1=$matches[1];
//$arr=explode('=',$url1);
//$name=explode('&',$arr[2]);


