<?php

namespace Demo\Demo\Controllers;

use Pegase\Core\Http\Response\Response;
use Pegase\Core\Controller\Objects\ControllerInterface;

class DemoController implements ControllerInterface {

  private $sm;

  public function __construct($sm) {
    $this->sm = $sm;
  }

  public function index() {
    $response = new Response();
    $twig = $this->sm->get('pegase.component.template.twig');

    $response->write(
      $twig->render(
        'src/Demo/Demo/Views/Demo/index.twig.html'
      )
    );

    return $response;
  }

  public function form_test() {
    $response = new Response();
    $twig = $this->sm->get('pegase.component.template.twig');
    $router = $this->sm->get('pegase.core.router');

    $form = new \Pegase\Security\Form\Objects\Form('form');

    $form->add('ma_chaine', 'string')
         ->add('ma_textarea', 'text')
         ->add('submit', 'submit', array('value' => 'send'));

    $formView = $form->generate();

    $response->write(
      $twig->render(
        'src/Demo/Demo/Views/Demo/form_test.twig.html', array(
          'form' => $formView
        )
      )
    );

    return $response;
  }
};
