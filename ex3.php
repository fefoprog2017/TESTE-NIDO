<?php

class arquivo {
 private $conteudo;
 
 function getConteudo() {
  return htmlentities( $this->conteudo );
 }
 function lerArquivo( $arquivo ) {
  $this->conteudo = file_get_contents( $arquivo );
 }
}
?>