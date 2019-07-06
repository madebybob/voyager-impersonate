<?php

namespace MadeByBob\VoyagerImpersonate;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use MadeByBob\VoyagerImpersonate\Actions\ImpersonateAction;
use TCG\Voyager\Facades\Voyager;

class VoyagerImpersonateServiceProvider extends ServiceProvider
{

  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    Voyager::addAction(ImpersonateAction::class);
  }

  /**
   * Register the application services.
   *
   * @return void
   */  
  public function register()
  {
    $this->app->singleton(VoyagerImpersonate::class, function () {
      return new VoyagerImpersonate();
    });

    $this->app->alias(VoyagerImpersonate::class, 'voyager-impersonate');
  }

}