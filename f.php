<?php
$x=array(2,1,3,5,6,7,2);


foreach($x as $i)
echo $i. " ";

echo "<br>--------</br>";

//array_push($x,10,20); يجمع لك عددين
//array_pop($x); يحذف لك اخلر رقم
//array_shift($x); يحذف لك اول رقم
unset($x[3]);
foreach($x as $i)
echo $i. " ";

?>