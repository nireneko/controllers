<?php

namespace Drupal\nireneko\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controlador de ejemplo.
 * Articulo: https://nireneko.com/articulo/2019/07/introduccion-rutas-controladores-durpal-8
 */
class NirenekoController extends ControllerBase {

  /**
   * Devuelve un array renderizable.
   */
  public function view() {
    return [
      '#markup' => $this->t('¡Hola mundo!'),
    ];
  }

}
