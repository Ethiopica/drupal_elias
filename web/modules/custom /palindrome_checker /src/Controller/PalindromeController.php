<?php

namespace Drupal\palindrome_checker\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Palindrome Checker routes.
 */
class PalindromeController extends ControllerBase
{

    /**
     * Render the palindrome form on a page.
     */
    public function content()
    {
        $form = \Drupal::formBuilder()->getForm('Drupal\palindrome_checker\Form\PalindromeForm');

        return [
            '#type' => 'markup',
            '#markup' => '',
            'form' => $form,
        ];
    }
}
