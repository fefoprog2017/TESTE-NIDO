<?php

function aposta() {

 $random = array();
    
 $i = 0;
 while( $i <= 5 ) {
  $numero = rand( 1,60 );
  if( ! in_array( $num,$random ) ) {
   $random[] = $num;
   ++$i;
  }
 }
 sort( $random );

    return $random;
}
?>