<?php

namespace Dekasender\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Dekasender Sms Facade
 *
 * @method static \Dekasender\HttpClient\Response sendSms(string $receiver, string $message, bool $isUnicode)
 */
class Sms extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'dekasender.sms';
  }
}
