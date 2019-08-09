<?php

namespace Tests\Unit\Console\Commands;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * @see \App\Console\Commands\SitemapGenerateCommand
 */
class SitemapGenerateCommandTest extends TestCase
{
    /**
     * @test
     */
    public function it_runs_successfully()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $this->artisan('sitemap:generate')
            ->assertExitCode(0)
            ->run();

        // TODO: perform additional assertions to ensure the command behaved as expected
    }
}

