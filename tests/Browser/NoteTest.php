<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group note
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->type('email', 'admin@gmail.com')
            ->type('password', 'password')
            ->press('@login-button')
            ->assertPathIs('/dashboard')
            ->clickLink(link: 'Create Note')
            ->type('title', 'catatanku')
            ->type('description', 'yeiy berhasil')
            ->press('CREATE');
        });
    }
}
