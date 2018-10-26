<?php
function &test()

{

    static $b=0;//申明一个静态变量

    $b=$b+1;

    //echo $b;

    return $b;

}

   

$a=test();//这条语句会输出　$b的值　为１
echo $a;
$a=5;

$a=test();//这 条语句会输出　$b的值　为2
echo $a;
$a=&test();//这条语句会输出　$b的值　为3

echo $a;
?>