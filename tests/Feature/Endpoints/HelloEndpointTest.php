<?php

declare(strict_types=1);

use Inertia\Testing\AssertableInertia as Assert;

test('hello', function () {
    $this->get(route('hello'))
        ->assertOk()
        ->assertInertia(fn (Assert $page) => $page
            ->component('hello::index', false)
            ->where('message', 'World'),
        );
});
