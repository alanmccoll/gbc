<?php

namespace Drupal\youtubechannel\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;

/**
 * @Block(
 *   id = "youtubechannel_block",
 *   admin_label = @Translation("Youtube Channel"),
 * )
 */
class Youtubechannelblock extends BlockBase {
  
  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'youtubechannel_block',
    ];
  }

}

