<?php

namespace Drupal\hello_elias\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloEliasController extends ControllerBase
{


    public function content()
    {
        return [
            '#markup' => $this->t('Hello Elias, welcome to my Drupal site!'),
        ];
    }


    public function greeting($name)
    {
        return [
            '#markup' => $this->t('Hello @name, welcome to my Drupal site!', ['@name' => $name]),
        ];
    }
}
