<?php

  require __DIR__ . "/../vendor/autoload.php";

  function pegase_autoloader($class) {
    $str = str_replace('\\', '/', $class);

    if($str[0] != '/')
      $str = '/' . $str;

    if(file_exists(__DIR__ . '/../src' . $str . '.php'))
      include(__DIR__ . '/../src' . $str . '.php');
    else if(file_exists(__DIR__ . '/../vendor/nativgames' . $str . '.php'))
      include(__DIR__ . '/../vendor/nativgames' . $str . '.php');
  }

  spl_autoload_register('pegase_autoloader');

  require __DIR__ . "/Modules.php";

  function LaunchShell($params, $base_dir, $argc, $argv) {

    $modules = GetModules($base_dir);

    // on charge le composant console

    $modules[] = new Pegase\Core\Shell\ShellModule($base_dir);

    new Pegase\Core\Shell\Shell($params, $modules, $argc, $argv, $base_dir);
  }

  LaunchShell(array(), __DIR__ . '/../', $argc, $argv);

?>

