<?php

class PersonProviderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function formattersAreWorkingAndNotEmpty()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Person($faker));

        $this->assertNotEmpty($faker->director);
        $this->assertNotEmpty($faker->maleDirector);
        $this->assertNotEmpty($faker->femaleDirector);

        $this->assertNotEmpty($faker->actor);
        $this->assertNotEmpty($faker->maleActor);
        $this->assertNotEmpty($faker->femaleActor);

        $this->assertNotEmpty($faker->cinematographer);
        $this->assertNotEmpty($faker->composer);
    }

    /**
     * @test
     */
    public function multipleProvidersAreWorking()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Person($faker));

        $this->assertCount(1, $faker->directors(null, 1));
        $this->assertCount(3, $faker->directors(null));
        $this->assertCount(5, $faker->directors(null, 5));

        $this->assertCount(1, $faker->femaleDirectors(1));
        $this->assertCount(3, $faker->femaleDirectors());
        $this->assertCount(5, $faker->femaleDirectors(5));

        $this->assertCount(1, $faker->maleDirectors(1));
        $this->assertCount(3, $faker->maleDirectors());
        $this->assertCount(5, $faker->maleDirectors(5));

        $this->assertCount(1, $faker->actors(null, 1));
        $this->assertCount(3, $faker->actors(null));
        $this->assertCount(5, $faker->actors(null, 5));

        $this->assertCount(1, $faker->femaleActors(1));
        $this->assertCount(3, $faker->femaleActors());
        $this->assertCount(5, $faker->femaleActors(5));

        $this->assertCount(1, $faker->maleActors(1));
        $this->assertCount(3, $faker->maleActors());
        $this->assertCount(5, $faker->maleActors(5));

        $this->assertCount(1, $faker->cinematographers(1));
        $this->assertCount(3, $faker->cinematographers());
        $this->assertCount(5, $faker->cinematographers(5));

        $this->assertCount(1, $faker->composers(1));
        $this->assertCount(3, $faker->composers());
        $this->assertCount(5, $faker->composers(5));
    }
}
