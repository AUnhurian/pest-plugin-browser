<?php

declare(strict_types=1);

namespace Pest\Browser;

use Pest\Browser\ValueObjects\TestResult;
use Pest\Browser\ValueObjects\TestResultResponse;

/**
 * @internal
 */
final class PendingTest
{
    /**
     * The pending operations.
     */
    private array $operations = [];

    /**
     * Visits a URL.
     */
    public function visit(string $url): self
    {
        $this->operations[] = new Operations\Visit($url);

        return $this;
    }

    /**
     * Checks if the page has a title.
     */
    public function toHaveTitle(string $title): self
    {
        $this->operations[] = new Operations\ToHaveTitle($title);

        return $this;
    }

    /**
     * Clicks some text on the page.
     */
    public function click(string $text): self
    {
        $this->operations[] = new Operations\Click($text);

        return $this;
    }

    /**
     * Checks if the page url is matching.
     */
    public function assertUrlIs(string $url): self
    {
        $this->operations[] = new Operations\AssertUrlIs($url);

        return $this;
    }

    /**
     * Build and return the final response the test received.
     */
    public function response(): TestResultResponse
    {
        return $this->build()->response();
    }

    /**
     * Build the test result.
     */
    public function build(): TestResult
    {
        $compiler = new Compiler($this->operations);

        $compiler->compile();

        $worker = new Worker;

        $result = $worker->run();

        expect($result->ok())->toBeTrue();

        return $result;
    }

    /**
     * Ends the chain and builds the test result.
     */
    public function __destruct()
    {
        $this->build();
    }
}
