<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RedirectAfterLogin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {
        // Tambahin flash untuk alert
        Session::flash('login_success', 'Selamat datang kembali!');
    }
}
