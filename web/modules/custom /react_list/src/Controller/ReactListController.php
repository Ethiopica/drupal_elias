<?php

namespace Drupal\react_list\Controller;

use Drupal\Core\Controller\ControllerBase;

class ReactListController extends ControllerBase
{

    /**
     * Returns a page with the React app container.
     */
    public function reactlist()
    {
        return [
            '#type' => 'markup',
            '#markup' => '<div id="react_app">React app will mount here</div>',
        ];
    }
}
