<?php

declare(strict_types=1);

test('goes back and forward', function (): void {
    $this->visit('/')
        ->clickLink('Get Started')
        ->assertUrlIs('https://pestphp.com/docs/installation')
        ->back()
        ->assertUrlIs('http://localhost:9357')
        ->forward()
        ->assertUrlIs('https://pestphp.com/docs/installation');
});
