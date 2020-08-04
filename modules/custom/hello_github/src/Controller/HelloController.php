<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */
namespace Drupal\hello_github\Controller;
class HelloController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, Github!'),
    );
  }
}
