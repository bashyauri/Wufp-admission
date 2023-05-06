<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\StudentPolicy;
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
        User::class => UsersPolicy::class,
        User::class => StudentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-items', 'App\Policies\UsersPolicy@manageItems');

        Gate::define('manage-users', 'App\Policies\UsersPolicy@manageUsers');
        Gate::define('printAdmissionForm', 'App\Policies\StudentPolicy@printAdmissionForm');
    }


}