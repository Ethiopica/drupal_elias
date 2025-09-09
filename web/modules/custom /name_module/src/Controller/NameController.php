<?php

namespace Drupal\name_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class NameController extends ControllerBase
{
    public function name()
    {
        return new Response('Hello - My is ELIAS');
    }
}
