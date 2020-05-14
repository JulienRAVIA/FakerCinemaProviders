<?php

class MovieProviderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function formattersAreWorkingAndNotEmpty()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Movie($faker));

        $this->assertNotEmpty($faker->movie);
        $this->assertNotEmpty($faker->runtime);
        $this->assertNotEmpty($faker->movieGenre);
        $this->assertNotEmpty($faker->studio);
        $this->assertNotEmpty($faker->saga);
        $this->assertNotEmpty($faker->overview);
    }

    /**
     * @test
     */
    public function multipleProvidersAreWorkingAndNotEmpty()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Movie($faker));

        $this->assertCount(1, $faker->movies(1));
        $this->assertCount(3, $faker->movies());
        $this->assertCount(5, $faker->movies(5));

        $this->assertCount(1, $faker->movieGenres(1));
        $this->assertCount(3, $faker->movieGenres());
        $this->assertCount(5, $faker->movieGenres(5));

        $this->assertCount(1, $faker->studios(1));
        $this->assertCount(3, $faker->studios());
        $this->assertCount(5, $faker->studios(5));

        $this->assertCount(1, $faker->sagas(1));
        $this->assertCount(3, $faker->sagas());
        $this->assertCount(5, $faker->sagas(5));
    }
}
