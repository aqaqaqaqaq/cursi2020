<?php
$a=111;
$sum=0;
$b=1;
while($b<$a)
{
    if($b%3==0)
    {
        $sum+=$b;
    }
    $b++;
}
echo $sum;
