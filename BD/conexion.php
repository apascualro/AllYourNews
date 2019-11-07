<?php
  class DB{
        function conectarDB(){
          $myconexion = new mysqli("localhost", "username", "");
          if ($myconexion->connect_error) {
              die("<p class='error'>Fallo de conexión <br> </p>");}

            return $myconexion;
        }


    }


 ?>