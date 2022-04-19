<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        if (! $this->app->runningInConsole()) {            
             $categories = Category::all();             
             View::share('categories', $categories);         
            }         
        if (! $this->app->runningInConsole()) {             
            $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'DESC')->paginate(6);             
            View::share('announcements', $announcements);        
        }
        if (! $this->app->runningInConsole()) {             
            $counter = Announcement::ToBeRevisionedCount();
            View::share('counter', $counter); 
        }

    
    }
}
