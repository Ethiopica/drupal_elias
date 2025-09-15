<?php

namespace Drupal\blog_list\Controller;

use Drupal\Core\Controller\ControllerBase;

class BlogListController extends ControllerBase
{

    /**
     * Returns a page with the Blog app container.
     */
    public function bloglist()
    {
        return [
            '#type' => 'markup',
            '#markup' => '<div id="blog_app">Blog app will mount here</div>',

        ];
    }
}
