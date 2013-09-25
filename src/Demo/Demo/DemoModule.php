<?php

namespace Demo\Demo;

use Pegase\Core\Module\AbstractModule;

class DemoModule extends AbstractModule {

  public function get_name() {
    return "Demo/Demo";
  }

  public function get_path() {
    return "src/Demo/Demo/";
  }
}

