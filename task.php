<?php
$x=[1,2,3,4,5];
$L=$x[0];
for($i=1;$i<count($x);$i++)
{
    if($L<$x[$i])
    {
        $L=$x[$i];
    }
}
echo "array element is:1,2,3,4,5";
echo "<br>";
 echo"\n large element:",$L,"\n";
 echo "<br>";
 $S=$x[0];
 for($i=0;$i<count($x);$i++)
 {
    if($S>$x[$i])
    {
        $S=$x[$i];

    }
 }

 echo"\n small element:",$S,"\n";