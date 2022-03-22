<?php 

namespace Cloudoki\InstaGrab;

use Illuminate\Support\ServiceProvider;

class InstaGrabServiceProvider extends ServiceProvider {

   /**
    * Bootstrap the application services.
    *
    * @return void
    */
   public function boot()
   {
      //
   }

   /**
    * Register the application services.
    *
    * @return void
    */
   public function register()
   {
      $this->app->make('Cloudoki\InstaGrab\InstaGrabController');
   }

}