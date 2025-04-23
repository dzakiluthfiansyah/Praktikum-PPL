<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'admin@gmail.com')
                    ->type('password', 'password')
                    ->press('@login-button')
                    ->assertPathIs('/dashboard')
                    ->waitForLocation('/dashboard')
                    ->assertPathIs('/dashboard')
                    ->press('Dzaki')
                    ->clickLink('Log Out');
        });
    }
}
