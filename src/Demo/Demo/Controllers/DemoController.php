<?php

namespace Demo\Demo\Controllers;

use \Pegase\Core\Response\Object\Response;
use Pegase\Core\Controller\Objects\ControllerInterface;

class DemoController implements ControllerInterface {

  private $sm;

  public function __construct($sm) {
    $this->sm = $sm;
  }

  public function index() {
    $response = new Response();
    $twig = $this->sm->get('pegase.component.template.twig');

    $this->sm->get('pegase.core.module_manager')->get_file("Demo/Demo", "test");

    $response->write(
      $twig->render(
        'src/Demo/Demo/Views/Demo/index.twig.html'
      )
    );

    return $response;
  }
};
