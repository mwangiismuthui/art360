<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      //savior for online server
      // $this -> app -> bind('path.public', function(){
      // return base_path('/../public_html');
      //
      // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::share('key', 'value');
        // Schema::defaultStringLength(191);

        // $categories = Category::all();

        // View::share('categories',$categories);
    }
}
