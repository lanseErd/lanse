<?php
function &test()

{

    static $b=0;//����һ����̬����

    $b=$b+1;

    //echo $b;

    return $b;

}

   

$a=test();//�������������$b��ֵ��Ϊ��
echo $a;
$a=5;

$a=test();//�� �����������$b��ֵ��Ϊ2
echo $a;
$a=&test();//�������������$b��ֵ��Ϊ3

echo $a;
?>