<html>
    <head>

<?php

$resz = 0;
$orz = 0;

for($i=0; $i<100; $i++){

$los = rand(1,2);
if($los == 1){
    
    $resz++;
}
else
{ 
    $orz++;
}
}
if ($resz > $orz){
    echo ("Reszek więcej byczq +1 <br>");
}
else if ($resz == $orz){
    echo ("remis <br>");
}


else echo ("Orzełki górą <br>");

echo ("Orzełków : ".$orz." Reszek : ".$resz);


?>

</head>
</html>