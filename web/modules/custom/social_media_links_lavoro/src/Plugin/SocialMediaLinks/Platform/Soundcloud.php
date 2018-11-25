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
 * Provides 'Soundcloud' platform.
 *
 * @Platform(
 *   id = "Soundcloud",
 *   name = @Translation("Soundcloud"),
 *   iconName = "soundcloud",
 *   urlPrefix = "https://soundcloud.com/",
 * )
 */
class Soundcloud extends PlatformBase {}