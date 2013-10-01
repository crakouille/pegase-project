<?php
  session_start();

  require __DIR__ . "/../vendor/autoload.php";

  function LaunchApplication($params, $base_dir) {

    //$modules_pegase = GetPegaseModules();

    new Pegase\Core\Application\Application(
      $params,
      $base_dir
    );
  }

?>
