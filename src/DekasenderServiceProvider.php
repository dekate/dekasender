<?php

namespace Dekasender;

use Illuminate\Support\ServiceProvider;

class DekasenderServiceProvider extends ServiceProvider
{
  /**
   * Publishes configuration file.
   *
   * @return  void
   */
  public function boot()
  {
    $this->publishes([
      __DIR__ . '/config/dekasender.php' => config_path('dekasender.php'),
    ], ['dekasender']);
  }
  /**
   * Make config publishment optional by merging the config from the package.
   *
   * @return  void
   */
  public function register()
  {
    $this->mergeConfigFrom(
      __DIR__ . '/config/dekasender.php',
      'dekasender'
    );
    $this->app->bind('dekasender.whatsapp', function () {
      return new Whatsapp(config('dekasender.api-key'), config('dekasender.base-url'));
    });
    $this->app->bind('dekasender.sms', function () {
      return new Sms(config('dekasender.api-key'), config('dekasender.base-url'));
    });
    $this->app->bind('dekasender.email', function () {
      return new Email(config('dekasender.api-key'), config('dekasender.base-url'));
    });
  }
}
