<?php
require __DIR__ . "/../app/Launcher.php";

umask(0000);

$params = array();
LaunchApplication($params, __DIR__ . "/../");
?>
