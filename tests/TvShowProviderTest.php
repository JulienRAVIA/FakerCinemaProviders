<?php

class TvShowProviderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function formattersAreWorkingAndNotEmpty()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\TvShow($faker));

        $this->assertGreaterThanOrEqual(1, $faker->tvShowTotalSeasons);
        $this->assertLessThanOrEqual(25, $faker->tvShowTotalSeasons);

        $this->assertGreaterThanOrEqual(6, $faker->tvShowTotalEpisodes);
        $this->assertLessThanOrEqual(650, $faker->tvShowTotalEpisodes);

        $this->assertGreaterThanOrEqual(5, $faker->tvShowEpisodesRuntime);
        $this->assertLessThanOrEqual(90, $faker->tvShowEpisodesRuntime);

        $this->assertNotEmpty($faker->tvShow);
        $this->assertNotEmpty($faker->overview);
    }

    /**
     * @test
     */
    public function multipleProvidersAreWorkingAndNotEmpty()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\TvShow($faker));

        $this->assertCount(1, $faker->tvShows(1));
        $this->assertCount(3, $faker->tvShows());
        $this->assertCount(5, $faker->tvShows(5));

        $this->assertCount(1, $faker->tvGenres(1));
        $this->assertCount(3, $faker->tvGenres());
        $this->assertCount(5, $faker->tvGenres(5));

        $this->assertCount(1, $faker->tvNetworks(1));
        $this->assertCount(3, $faker->tvNetworks());
        $this->assertCount(5, $faker->tvNetworks(5));
    }
}
