<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('is_admin', function (User $user) {
            return $user->is_admin == 1;
        });

        Gate::define('is_super_admin', function (User $user) {
            return $user->is_admin == 1 && ($user->email == 'danielamontechiaregentil@gmail.com' || $user->email == 'dev.anderson.santos@gmail.com');
        });
    }
}
