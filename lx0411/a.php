<?php


    /*   for($i=1;$i<=9;$i++){
           for($j=0;$j<=9;$j++){
               for($k=0;$k<=9;$k++){
                   if($i*$i*$i+$j*$j*$j+$k*$k*$k==$i*100+$j*10+$k){
                       echo "$i$j$k";
                       echo "\t";

                   }
               }
           }
       }*/
/*$sum=0;
 for($i=1;$i<=100;$i++){
     $sum+=$i;
 }
 echo $sum;*/


//第二种
/*$i=1;
$sum=0;
while ($i<=100) {
    $sum = $sum +$i;
    $i++;
}
echo $sum;*/
//第三种
/*echo array_sum(range(1,100));*/
//第四
//function get_sum($n){
//   /* return $n==1?1:$n+get_sum($n-1);*/
//    if($n==1){
//        return 1;
//    }else{
//        return $n+get_sum($n-1);
//    }
//}
//echo get_sum(100);

function huiwen2($str){
    $rev = '';
    $len = strlen($str);
    for ($i=$len-1; $i >=0 ; $i--) {
        $rev .=$str[$i];
    }
  if($str == $rev){
      return "这是个回文字符串";
  }else{
      return "这不是个回文字符串";
  }
}
var_dump(huiwen2('jhjgfhg'));


