<?php

namespace App\Providers;

use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\ServiceProvider;
use App\Support\Testing\FakerImageProvider;

class TestingServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new FakerImageProvider($faker));

            return $faker;
        });
    }


    public function boot(): void
    {
        //
    }
}
