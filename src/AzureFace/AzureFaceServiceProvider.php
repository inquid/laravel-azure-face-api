<?php
namespace AzureFace;

use Illuminate\Support\ServiceProvider;

class AzureFaceServiceProvider extends ServiceProvider {

  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
      $this->publishes([__DIR__ . '/config/cognitive.php' => config_path('azure-face.php')], 'azure-face');
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
      $this->app->singleton('niraj-shah.laravel-azure-face-api', function ($app) {
          return new AzureFaceClient(
            $app['config']->get('cognitive.face.api_key'),
            $app['config']->get('cognitive.face.endpoint')
          );
      });

      $this->app->singleton('niraj-shah.laravel-azure-speech-api', function ($app) {
          return new AzureSpeechClient(
            $app['config']->get('cognitive.speech.api_key'),
            $app['config']->get('cognitive.speech.region')
          );
      });
  }

  /**
  * Get the services provided by the provider.
  *
  * @return array
  */
  public function provides()
  {
      return ['niraj-shah.laravel-azure-face-api', 'niraj-shah.laravel-azure-speech-api'];
  }

}
