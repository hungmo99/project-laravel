<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\information;
use App\Models\Wishlist;
use Illuminate\Pagination\Paginator;
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
        view()->composer('*', function ($view) {
            $view->with([
                'client'=>session()->get('customer'),
                'cate_pro' => Category::where([['status',1],['type',1]])->orderby('name')->get(),
                'cate_blog' => Category::where([['status',1],['type',0]])->orderby('name')->get(),
                'brand' => Brand::where('status', 1)->get(),
                'info' => information::where('status', 1)->first(),
            ]);
        });
    }
}
