<?php

declare(strict_types=1);

namespace Pest\Browser;

use Pest\Plugin;

Plugin::uses(Browser::class);

function visit(string $url): PendingTest
{
    return (new PendingTest)->visit($url);
}
