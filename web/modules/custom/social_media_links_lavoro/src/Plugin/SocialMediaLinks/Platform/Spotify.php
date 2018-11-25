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
 * Provides 'Spotify' platform.
 *
 * @Platform(
 *   id = "spotify",
 *   name = @Translation("Spotify"),
 *   urlPrefix = "https://open.spotify.com/",
 * )
 */
class Spotify extends PlatformBase {}