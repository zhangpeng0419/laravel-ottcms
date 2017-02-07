<?php

namespace App\Providers;
 

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
     /**
     * 应用的策略映射。
     *
     * @var array
     */
   
	
	/**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {	
	Schema::defaultStringLength(191);//mysql版本过低问题处理
    	
   
	
	
	}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
