<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('email', 'admin@gmail.com')
                    ->type('password', 'password')
                    ->press('@login-button')
                    ->assertPathIs('/dashboard')
                    ->clickLink(link: 'Edit');
        });
    }
}
