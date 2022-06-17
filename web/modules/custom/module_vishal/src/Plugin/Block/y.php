<?php

namespace Drupal\module_vishal\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "xxx",
 *   admin_label = @Translation("New"),
 * )
 */

class y extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
      return [
        '#markup' => "<p>".rand(100,1000)."</p>",
        '#cache' => ['tags' => ['node:2'],'contexts' => ['url'],'max-age'=> 0 ],
        
      ];

    }}