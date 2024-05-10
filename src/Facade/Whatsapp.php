<?php

namespace Dekasender\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Dekasender Whatsapp Facade
 *
 * @method static \Dekasender\HttpClient\Response sendMessage(string $receiver, string $message)
 * @method static \Dekasender\HttpClient\Response sendFile(string $receiver, string $imageUrl, string $type, string $caption = "")
 * @method static \Dekasender\HttpClient\Response sendImage(string $receiver, string $imageUrl, string $caption = "")
 * @method static \Dekasender\HttpClient\Response sendAudio(string $receiver, string $audioUrl, string $caption = "")
 * @method static \Dekasender\HttpClient\Response sendVideo(string $receiver, string $videoUrl, string $caption = "")
 * @method static \Dekasender\HttpClient\Response sendDocument(string $receiver, string $documentUrl, string $caption = "")
 */
class Whatsapp extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'dekasender.whatsapp';
  }
}
