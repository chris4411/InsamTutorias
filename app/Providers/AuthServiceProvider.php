<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport; //<- add

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy', // <- uncomment
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes(); // <- add

        // <- add

        Passport::tokensCan([
            'admin' => 'Administrateur du system',
            'vendeur' => 'Vendeur sur la platefornme',
            'cient' => 'Client de la plateforme',
            'livreur' => 'Livreur sur la plateforme',
        ]);
    }
}
