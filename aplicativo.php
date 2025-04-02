
<?php
$n1=0;
$n2=10;
$n3=15;
while ($n1 !=0 || $n2 !=0 || $n3 !=0) {
if ($n1 > $n2 && $n1 > $n3) {
	
	echo "primeiro valor maior que 0";
 
}

	elseif ($n2 > $n1 && $n2 > $n3) {
	
	echo "segundo valor maior que 0";
 
}

    elseif($n3 > $n2 && $n3 > $n1) {
	
	echo "terceiro valor maior que 0";
 
}
else{
echo "insira outro valor, entrada é igual a 0";
}
break;
}
?>










