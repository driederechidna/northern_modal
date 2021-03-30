<?php
/**
 * @file
 * Contains \Drupal\northern_modal\Form\ModalForm.
 */
namespace Drupal\northern_modal\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ModalForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'modal_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['question_user_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Your Name'),
      '#title_display' => 'invisible',
      '#required' => TRUE,
      '#attributes' => array(
        'placeholder' => t('John Doe'),
      ),
    );

    $form['text'] = array(
      '#type' => 'textarea',
      '#title' => t('Question'),
      '#title_display' => 'before',
      '#required' => TRUE,
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit question'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }

   }
}
