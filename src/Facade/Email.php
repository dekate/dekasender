<?php

namespace Dekasender\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Dekasender Email Facade
 *
 * @method static \Dekasender\HttpClient\Response sendEmail(string $receiver, string $subject, string $message, string $sender, string $replyTo)
 */
class Email extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'dekasender.email';
  }
}
