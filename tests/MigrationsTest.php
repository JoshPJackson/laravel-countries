<?php

namespace Lwwcas\LaravelCountries\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Lwwcas\LaravelCountries\Providers\LaravelCountriesServiceProvider;
use Orchestra\Testbench\TestCase;

class MigrationsTest extends TestCase
{
    use RefreshDatabase;

    protected function getPackageProviders($app)
    {
        return [LaravelCountriesServiceProvider::class];
    }

    protected function defineDatabaseMigrations()
    {
        $this->loadLaravelMigrations();
    }

    public function testMigrationsWork(): void
    {
        $this->assertTrue(true);
    }
}
