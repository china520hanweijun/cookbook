<?php

namespace App\Providers;

use App\Category;
use App\Level;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
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
        //配置迁移默认字符串长度
        Schema::defaultStringLength(191);
        view()->composer('*', function($view){
            //难度
            $levels = Level::all();
            //分类
            $cates = Category::all()->where('pid', 0);
//            dd($cates);
            $view->with('levels' , $levels);
            $view->with('categories' , $cates);
        });
    }
}
