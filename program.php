 <?php
  $arr=[];
  $counts=0;
for($i=1;$i<1000;$i++)
{
 $k=$i*$i;
    $d;
    $d=$k;
    $count=0;
    while($d!=0)
      {
      $d= (int)($d/10);
      $count++;
      }

  $n=(int)($count/2);
  $z=($count-$n);
  $m=pow(10,$z);
  $a=((int)($k/$m));
  $b=((int)($k%$m));
  $sum=(int)$a+(int)$b;
 
if($i==$sum)
{
  $arr[$counts]=$i;
  $counts++;
 
}

//die;
}
print_r($arr);

?>
<?php
// for($i=1;$i<=50;$i++)
// {
//   for($j=$i+1;$j<=50;$j++)
//   {
// 		$concat = $i . $j;
//         $square = $j*$j;
// 		if($concat == $square)
// 		{
//         echo $i."==".$j."-Sum-".$concat."-Square-".$square;
//      	echo "<br>";
// 		}
//   }
// }
?>