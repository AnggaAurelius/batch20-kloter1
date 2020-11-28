<!DOCTYPE html>
<html>
<body>
<?php

printPattern(15);

function printPattern($jml) {
    $x=1;
    $y=0;
    $hitung = $jml/2+1;
	$tengah = (int)$hitung;
    $ht = $jml/5;
    $int = (int)$ht;
    $a = $tengah;
    $b = $tengah;
    $dumb = array("D","u","m","b","w","a","y","s","I","d");
    if ($jml%2 ==1 ){
		while($x <= $jml) {
			for ($i = 1; $i <= $jml; $i++) {
				if ( $x == $tengah && $i > $int && $i <= $int+10 && $jml>14){
				echo " $dumb[$y]";
				$y++;
				}elseif ( $x == 1 || $x == $jml){
				echo "* ";
				}elseif ( $i == $tengah){
				echo "_ ";
				}elseif ( $i >= $a && $i <= $b){
				echo "_ ";
				}else{
				echo "* ";
				}
			}
			
          if ( $x>1 && $x < $tengah){    
          $a--;
          $b++;
          }elseif ( $x >= $tengah){    
          $a++;
          $b--;
          }
		echo "<br>";
		$x++;
		}
    }else{
	echo "masukkan bilangan ganjil saja<br>supaya tidak error :)";
	}
}
?>
</body>
</html>
