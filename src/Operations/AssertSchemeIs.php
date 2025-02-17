<?php

declare(strict_types=1);

namespace Pest\Browser\Operations;

use Pest\Browser\Contracts\Operation;

final readonly class AssertSchemeIs implements Operation
{
    /**
     * Creates an operation instance.
     */
    public function __construct(
        private string $scheme
    ) {
        //
    }

    /**
     * Compile the operation.
     */
    public function compile(): string
    {
        return sprintf("await expect(new URL(await page.url()).protocol).toBe('%s:');", $this->scheme);
    }
}
