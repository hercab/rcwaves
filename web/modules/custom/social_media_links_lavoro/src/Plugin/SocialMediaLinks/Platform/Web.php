<?php
/**
 * Created by PhpStorm.
 * User: yunior
 * Date: 7/18/2018
 * Time: 5:22 PM
 */

namespace Drupal\social_media_links_lavoro\Plugin\SocialMediaLinks\Platform;

use Drupal\social_media_links\PlatformBase;

/**
 * Provides 'Web' platform.
 *
 * @Platform(
 *   id = "Web",
 *   name = @Translation("Web"),
 *   iconName = "globe",
 *   urlPrefix = "http://",
 * )
 */
class Web extends PlatformBase {}