<?php

function GetModules($base_dir) {
  return array(
    new Pegase\PegaseModule(),
    new Demo\Demo\DemoModule()
  );
}

