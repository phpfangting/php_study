<?php 


// function chunkSplitUnicode($str, $l = 76, $e = "\r\n") {
//         $tmp = array_chunk(
//             preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY), $l);
//         $str = "";
//         foreach ($tmp as $t) {
//             $str .= implode("", $t) . $e;
//         }
//         return $str;
// }

// $str = "hello 你是谁的谁 cscsds 是DVD是v 司法所发生地方大幅度";
// $number=100000.001;
// echo is_int(0);

// $str="25105,123,105,0,25105,104,58,0,25105,104,63,0,25105,105,58,0,25105,123,58,0,25105,105,63,0,25105,123,63,0,";
// $str = mb_convert_encoding($str,'utf-8');
// echo $str;
// $imgPath='http://dfstest.artdata.net/group1/M00/00/00/CgoKYVlHayuAWlmrAACUHMOM-PM274.jpg';//_ARTDATA100
// $width=100;
// $extension = pathinfo($imgPath, PATHINFO_EXTENSION);
//  echo !empty($extension)?str_replace('.'.$extension, '_ARTDATA'.$width.'.'.$extension, $imgPath):'';
$item['itemPic']='';
print_r(explode(',', $item['itemPic']));