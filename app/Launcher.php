<?php
  session_start();

  require __DIR__ . "/../vendor/autoload.php";
  require __DIR__ . "/Modules.php";

  function LaunchApplication($params, $base_dir) {

    //$modules_pegase = GetPegaseModules();
    $modules = GetModules($base_dir);

    new Pegase\Core\Application\Application(
      $params, 
      //$modules_pegase, 
      $modules, 
      $base_dir
    );
  }

?>
