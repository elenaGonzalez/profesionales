<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sesion
 *
 * @author user
 */
class sesion {
    
     function __construct() {
     session_start ();
  }
  
  public function set($usuario, $valor) {
     $_SESSION [$usuario] = $valor;
  }
  public function get($usuario) {
     if (isset ( $_SESSION [$usuario] )) {
        return $_SESSION [$usuario];
     } else {
         return false;
     }
  }
  public function elimina_variable($usuario) {
      unset ( $_SESSION [$usuario] );
  }
  public function termina_sesion() {
      $_SESSION = array();
      session_destroy ();
  }
}
?>

