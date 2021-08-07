<?php
function sum($max) {
    return $max * 2;
}
echo sum(2);
?>
<?php
function sum2($a, $b){
    return $a + $b;
}
echo sum(1,2) ."\n";
?>
<?php
function sum3($arr){
    $result = 1;
    foreach($arr as $a){
    $result *= $a;
    }
    return $result;
}
echo sum3(array(1,3,5,7,9));
echo"\n";
?>
<?php
 function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number<$a){
        $max_number = $a;
     }
 }
 return $max_number;
 }
 echo max_array ([5,2,3,9,7]);
 ?>
 
 <?php
 $string = '<a href="http://test.com">Test</a>';
 echo strip_tags("<test>テスト</test>");
 echo "\n";
 ?>
 <?php
 $arr = [1,2];
 array_push($arr,3,4);
 var_dump($arr);
 ?>
 <?php
 $array1 = array("soccer", "tennis", "baseball");
 $array2 = array("swimming", "tabletennid", "land");
 $array = array_merge($array1,$array2);
 print_r($array);
 ?>
 <?php
 $time = mktime(9);
 var_dump(date('Y年m月d日h時i分s秒',$time));
 print('<br/>');
//  ?>
<?php
echo date('Y-m-d'). '<br>';
print('br/>');
