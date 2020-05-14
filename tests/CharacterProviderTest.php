<?php

class CharacterProviderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function formattersAreWorkingAndNotEmpty()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Character($faker));

        $this->assertNotEmpty($faker->character);
        $this->assertNotEmpty($faker->maleCharacter);
        $this->assertNotEmpty($faker->femaleCharacters);
    }

    /**
     * @test
     */
    public function multipleProvidersAreWorking()
    {

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Character($faker));

        $this->assertCount(3, $faker->characters);
        $this->assertCount(1, $faker->characters(null, 1));
        $this->assertCount(5, $faker->characters(null, 5));

        $this->assertCount(3, $faker->maleCharacters);
        $this->assertCount(1, $faker->maleCharacters(1));
        $this->assertCount(5, $faker->maleCharacters(5));

        $this->assertCount(3, $faker->femaleCharacters);
        $this->assertCount(1, $faker->femaleCharacters(1));
        $this->assertCount(5, $faker->femaleCharacters(5));
    }
}
