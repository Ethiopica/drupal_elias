<?php

namespace Drupal\hello_elias\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class HelloEliasForm extends FormBase
{

    public function getFormId()
    {
        return 'hello_elias_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Your Name'),
            '#required' => TRUE,
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
        ];

        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {

        $name = $form_state->getValue('name');


        $form_state->setRedirect('hello_elias.greeting', ['name' => $name]);
    }
}
