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

        Gate::define('manage-users', function ($user) {
            return $user->roles == 'ADMIN';
        });

        Gate::define('access-home', function ($user) {
            return $user->roles == 'ADMIN';
        });

        Gate::define('manage-reports', function ($user) {
            return $user->roles == 'PETUGAS';
        });

        Gate::define('manage-advices', function ($user) {
            return $user->roles == 'PETUGAS';
        });
    }
}
