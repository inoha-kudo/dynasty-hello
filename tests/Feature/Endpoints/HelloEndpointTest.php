<?php

declare(strict_types=1);

namespace Dynasty\Hello\Tests\Feature\Endpoints;

use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;

final class HelloEndpointTest extends TestCase
{
    public function test_hello(): void
    {
        $this->get(route('hello'))
            ->assertOk()
            ->assertInertia(fn (Assert $page) => $page
                ->component('hello::index', false)
                ->where('message', 'World'),
            );
    }
}
