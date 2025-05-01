<?php

namespace App\Providers;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Login::class => [
            \App\Listeners\RedirectAfterLogin::class,
        ],
        // Tambahan lain kalau mau dengar event login/logout biasa:
        // Login::class => [...],
        // Logout::class => [...],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }
}
