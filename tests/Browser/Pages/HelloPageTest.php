<?php

declare(strict_types=1);

namespace Dynasty\Hello\Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

final class HelloPageTest extends DuskTestCase
{
    public function test_hello(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('hello'))
                ->assertSee('Hello, World!');
        });
    }
}
