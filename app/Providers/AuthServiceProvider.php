<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;
 
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
   Passport::routes();
   
         // 这里的$user是当前登录用户，laravel会处理
         // 在调用的时候不用传入
         // Gate::define('show-post', function ($user, $post)) {
         //  return $user->id == $post->user_id;
       
           //下面为了复用这样替换上面写法
		 //    2017.2.7发现  $this->registerPolicies();官方已经写好，不需要下面语
			// Gate::define('show', function ($user, $post) {
      //  return $user->owns($Article);
   // });
	 
	 
	 
    }
}
