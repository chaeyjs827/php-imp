<?php
$num=array(6,45,45,64,34567,4,4,6,77,35,4,664,68,9,33);

$numSize = sizeof($num);

echo $numSize.'<br>';

echo '정렬되기 전 : ';
for($i=0; $i<$numSize; $i++)
{
    echo $num[$i].' ';
}

// 버블 정렬 로직
for($i=$numSize-2; $i>=0; $i--)
{
    for($j=0; $j<=$i; $j++)
    {
        if($num[$j]>$num[$j+1])
        {
            $tmp=$num[$j];
            $num[j]=$num[$j+1];
            $num[$j+1]=$tmp;
        }
    }
}

echo '오름 차순 : ';
for($i=0; $i<$numSize; $i++)
{
    echo $num[i].' ';
}