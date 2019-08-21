

<html>
<body>
<?php

include_once ex1;

$jogo = array();
$x = 1;

while( $x <= 3 ) {
 
    $nros = aposta();
 $r = 0;
    foreach( $jogo as $j ) {
  $r = 0;
  foreach( $nros as $n ) {
   if( in_array( $n,$j ) ) {
    ++$r;
   }
  }
  if( $r == 6 ) {
     break;
  }
 }
 $jogo[] = $nros;
 ++$x;
}

foreach( $jogo as $j ) {

 echo "<table>";
 echo "<tr>";
 $l = 1;
 for( $i = 1; $i <= 60; ++$i ) {
  if( in_array( $i,$j ) ) {
   echo "<td bgcolor=#0000FF>";
  } else {
   echo "<td>";
  }
  echo $i;
  echo "</td>";
  ++$l;
  if( $l > 10 ) {
   $l = 1;
   echo "</tr>";
   echo "<tr>";
  }
 }
 echo "</table>";
 echo "<hr>";
 
}

?>
</body>
</html>