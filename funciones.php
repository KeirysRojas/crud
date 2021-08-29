<?php
  function conectar_bd($clave,$basedatos)
  {
      $conexion = new mysql('localhost', 'root', $basedatos);
  
      if ($conexion->connect_error)
      {
      die('Error de conexion(' . $mysql->connect_errno . ') '. $mysql->connect_errno)
      }
      return $conexion;
  }
  
  function consulta ($conexion,$consulta_sql)
  {
      $resultado=$conexion->query($consulta_sql);
  
      if (!$resultado)
      {
          echo 'no se pudo consulta: ' . $conexion->error;
          exit;
      }
      return $resultado;
  }
?>