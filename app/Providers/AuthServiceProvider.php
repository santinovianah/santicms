<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-wisata', function($user){
            return $user->roles == "Administrator";
           });

        Gate::define('manage-user', function($user){
            return $user->roles == "Administrator";
           });
        
        Gate::define('manage-display', function($user){
            return $user->roles == "User";
           });
           
    }
}
