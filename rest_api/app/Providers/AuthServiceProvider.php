<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        $this->registerPolicies();
        /*
        Passport::routes();
        $startTime = date("Y-m-d H:i:s");
        $endTime = date("Y-m-d H:i:s",strtotime('+7 dat +1hour + 30 minutes +45 seconds',strtotime($startTime)));
        $expTime = \DateTime::createFromFormat("Y-m-d H:i:s",$endTime);
        Passport::tokensExpireIn($expTime);
        */

        //
    }
}
