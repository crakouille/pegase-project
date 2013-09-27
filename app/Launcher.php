<?php
  session_start();
  require __DIR__ . "/../vendor/autoload.php";

  /*function pegase_autoloader($class) {
    $str = str_replace('\\', '/', $class);

    if($str[0] != '/')
      $str = '/' . $str;

    if(file_exists(__DIR__ . '/../src' . $str . '.php'))
      include(__DIR__ . '/../src' . $str . '.php');
    else if(file_exists(__DIR__ . '/../vendor/nativgames' . $str . '.php'))
      include(__DIR__ . '/../vendor/nativgames' . $str . '.php');
  }

  spl_autoload_register('pegase_autoloader');*/

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
