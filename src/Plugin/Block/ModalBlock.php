<?php

namespace Drupal\northern_modal\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides the 'Northern Modal' with the attached form and JS.
 *
 * @Block(
 *   id = "nothern_modal_block",
 *   admin_label = @Translation("Northern Modal Block"),
 *   category = @Translation("Northern"),
 * )
 */
class ModalBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $block = array();

    //A dummy text area
    $block['intro_text'] = [
      '#type' => 'html_tag',
      '#tag' => 'p',
      '#value' => $this
        ->t('Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
    ];

    //Load the custom form created by this module
    $block['form'] = \Drupal::formBuilder()->getForm('Drupal\northern_modal\Form\ModalForm');

    return $block;
  }

}
