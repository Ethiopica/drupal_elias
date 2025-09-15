<?php

namespace Drupal\palindrome_checker\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class PalindromeForm extends FormBase
{

    public function getFormId()
    {
        return 'palindrome_checker_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['text'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Enter text to check'),
            '#required' => TRUE,
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Check'),
        ];

        // If result exists, show it below the form
        if ($result = $form_state->get('result')) {
            $form['result'] = [
                '#markup' => '<div class="palindrome-result">' . $result . '</div>',
            ];
        }

        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $input = $form_state->getValue('text');
        $normalized = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $input));
        $is_palindrome = $normalized === strrev($normalized);

        $result = $is_palindrome
            ? $this->t('✅ "@text" is a palindrome!', ['@text' => $input])
            : $this->t('❌ "@text" is NOT a palindrome.', ['@text' => $input]);

        // Save result into form state and rebuild form
        $form_state->set('result', $result);
        $form_state->setRebuild(TRUE);
    }
}
