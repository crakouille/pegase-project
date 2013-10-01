<?php

  require __DIR__ . "/../vendor/autoload.php";

  function LaunchShell($params, $base_dir, $argc, $argv) {

    new Pegase\Core\Shell\Shell($params, $argc, $argv, $base_dir);
  }

  LaunchShell(array(), __DIR__ . '/../', $argc, $argv);

?>

