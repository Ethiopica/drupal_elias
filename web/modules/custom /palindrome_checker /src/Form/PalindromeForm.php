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

        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $input = $form_state->getValue('text');
        $normalized = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $input));
        $is_palindrome = $normalized === strrev($normalized);

        if ($is_palindrome) {
            $this->messenger()->addStatus($this->t('✅ "@text" is a palindrome!', ['@text' => $input]));
        } else {
            $this->messenger()->addError($this->t('❌ "@text" is NOT a palindrome.', ['@text' => $input]));
        }
    }
}
