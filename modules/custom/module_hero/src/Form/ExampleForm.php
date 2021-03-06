<?php

namespace Drupal\module_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Our example form.
 */
class ExampleForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    // TODO: Implement getFormId() method.
    return "module_hero.exampleform";
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['text'] = array(
      '#type' => 'textarea',
      '#title' => $this
        ->t('Text'),
    );
    $form['copy'] = array(
      '#type' => 'checkbox',
      '#title' => $this
        ->t('Send me a copy'),
    );
    $form['settings']['active'] = array(
      '#type' => 'radios',
      '#title' => $this
        ->t('Poll status'),
      '#default_value' => 1,
      '#options' => array(
        0 => $this
          ->t('Closed'),
        1 => $this
          ->t('Active'),
      ),
    );

    $form['example_select'] = [
      '#type' => 'select',
      '#title' => $this
        ->t('Select element'),
      '#options' => [
        '1' => $this
          ->t('One'),
        '2' => $this
          ->t('Two'),
        '3' => $this
          ->t('Three'),
      ],
    ];
    $form['expiration'] = array(
      '#type' => 'date',
      '#title' => $this
        ->t('Content expiration'),
      '#default_value' => array(
        'year' => 2020,
        'month' => 2,
        'day' => 15,
      ),
    );
//    $form['submit'] = [
//      '#type' => 'submit',
//      '#value' => $this->t('Who will win?'),
//    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    \Drupal::messenger()->addMessage(
      'Submitting our form...'
    );
  }
}