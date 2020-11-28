<!DOCTYPE html>
<html>
<body>

<?php

function putarArray($array) {
    $x=1;
    $jml=count($array);
    $y=$jml-1;
    
    while($x <= 4) {
    $tmp=$array[0];
    echo "Putaran $x: [ ";
    for ($i = 0; $i <= $jml; $i++) {
        if ($i < $jml ){
        $array[$i] = $array[$i+1];
        }
    }
    $array[$y]=$tmp;
    
    foreach ( $array as $print){
    echo "$print ";
       }
    echo" ]<br>";
    $x++;
    }
}

$ok=array("a","b","c","d","e");
putarArray($ok);

?>

</body>
</html>
