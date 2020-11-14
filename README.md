# Faker Cinema

Provider for faker with real datas (real actors, actresses, directors, movies etc)

# Faker Cinema

[![Packagist](https://img.shields.io/packagist/dt/xylis/faker-cinema-providers.svg?style=flat-square)](https://packagist.org/packages/xylis/faker-cinema-providers)
[![Travis Build Status](https://img.shields.io/travis/JulienRAVIA/FakerCinemaProviders/master?style=flat-square)](https://travis-ci.org/JulienRAVIA/FakerCinemaProviders)

A growing collection of useful Providers for [fzaninotto/faker](https://github.com/fzaninotto/faker) mostly ported to PHP from the [stympy/faker](https://github.com/stympy/faker) Ruby library.

## Contents

1. [Installation](#installation)
1. [Available Formatters](#formatters)
1. [Contributing](#contributing)

## Installation

```bash
composer require xylis/faker-cinema-providers
```

## Formatters

Below is the list of bundled formatters in the default locale.

### `Xylis\FakerCinema\Provider\Movie`

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Xylis\FakerCinema\Provider\Movie($faker));

$faker->movie; // Saving Private Ryan
$faker->studio; // 20th Century Fox
$faker->runtime; // 03:22:06
$faker->overview; // Faker real text 
$faker->saga; // The Lords of The Ring Trilogy
$faker->movieGenre; // Drama

$faker->movies(2); // array('Saving Private Ryan', 'La La Land')
$faker->studios(2); // array('Warner Bros', 'Sony Pictures')
$faker->sagas(2); // array('The Lords of The Ring Trilogy', 'Star Wars')
$faker->movieGenres(2); // array('Drama', 'Comedy');

```

### `Xylis\FakerCinema\Provider\TvShow`

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Xylis\FakerCinema\Provider\TvShow($faker));

$faker->tvShow; // Breaking Bad
$faker->tvNetwork; // HBO
$faker->showGenre; // Sitcom
$faker->overview; // Faker real text
$faker->tvShowTotalEpisodes($min = 6, $max = 650); // 311
$faker->tvShowTotalSeasons($min = 1, $max = 25); // 5
$faker->tvShowEpisodesRuntime($min = 5, $max = 90); // 22

$faker->tvShows(2); // array('Dexter', 'Friends')
$faker->tvNetworks(2); // array('Netflix', 'ABC')
$faker->showGenres(2); // array('Drama', 'Sitcom')

```
### `Xylis\FakerCinema\Provider\Person`

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Xylis\FakerCinema\Provider\Person($faker));

$faker->actor; // Cate Blanchett
$faker->femaleActor; // Emma Stone
$faker->maleActor; // Ryan Gosling
$faker->director; // Stanley Kubrick
$faker->femaleDirector; // Agnès Varda
$faker->maleDirector; // David Fincher
$faker->composer; // Hans Zimmer
$faker->cinematographer; // Roger Deakins
$faker->person; // Cate Blanchett
$faker->femalePerson; // Emma Stone
$faker->malePerson; // Ridley Scott

$faker->actors($gender = null, $count = 2, $duplicates = false); // array('Christian Bale', 'Amy Adams');
$faker->actors($gender = 'male', $count = 2, $duplicates = false); // array('Christian Bale', 'Gary Oldman');
$faker->actors($gender = 'female', $count = 2, $duplicates = false); // array('Emma Watson', 'Amy Adams');
$faker->femaleActors($count = 2, $duplicates = false); // array('Emma Stone, 'Amy Adams')
$faker->maleActors($count = 2, $duplicates = false); // array('Ryan Gosling', 'Matt Damon');
$faker->directors($gender = null, $count = 2, $duplicates = false); // array('Stanley Kubrick', 'Jane Campion');
$faker->directors($gender = 'male', $count = 2, $duplicates = false); // array('Stanley Kubrick', 'Steven Spielberg');
$faker->directors($gender = 'female', $count = 2, $duplicates = false); // array('Kathryn Bigelow', 'Jane Campion');
$faker->femaleDirectors($count = 2, $duplicates = false); // array('Agnès Varda', 'Kathryn Bigelow');
$faker->maleDirectors($count = 2, $duplicates = false); // array('David Fincher', 'Denis Villeneuve');
$faker->composers($count = 2, $duplicates = false); // array('Hans Zimmer', 'Ennio Morricone');
$faker->cinematographers($count = 2, $duplicates = false); // array('Roger Deakins', 'Greig Fraser');
$faker->persons($gender = null, $count = 2, $duplicates = false); // array('Bradley Cooper', 'Greta Gerwig');
$faker->persons($gender = 'male', $count = 2, $duplicates = false); // array('Damien Chazelle', 'Gary Oldman');
$faker->persons($gender = 'female', $count = 2, $duplicates = false); // array('Kathryn Bigelow', 'Amy Adams');
$faker->femalePersons($count = 2, $duplicates = false); // array('Agnès Varda', 'Amy Adams')
$faker->malePersons($count = 2, $duplicates = false); // array('Denis Villeneuve', 'Leonardo Dicaprio');
```

### `Xylis\FakerCinema\Provider\Character`

Generates product and department data for e-commerce websites and online stores.

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Xylis\FakerCinema\Provider\Character($faker));

$faker->character($gender = null); // Skyler White
$faker->character($gender = 'male'); // Darth Vader
$faker->character($gender = 'female'); // Leia Organa
$faker->femaleCharacter; // Ellen Ripley
$faker->maleCharacter; // Walter White
$faker->characters($gender = null, $count = 2, $duplicates = false); // array('Darth Vader, 'Leia Organa');
$faker->characters($gender = 'male', $count = 2, $duplicates = false); // array('Darth Vader', 'Luke Skywalker');
$faker->characters($gender = 'female', $count = 2, $duplicates = false); // array('O-Ren Ishii', 'Beatrix Kiddo');
$faker->femaleCharacters($count = 2, $duplicates = false); // array('O-Ren Ishii', 'Beatrix Kiddo');
$faker->maleCharacters($count = 2, $duplicates = false); // array('Darth Vader', 'Luke Skywalker');
```

## Changes

#### v1.1.0

- Add `persons, femalePersons, malePersons, person, malePerson, femalePerson`

#### v1.0.1

- Add forgotten parameter `$duplicates` to `femaleDirectors, maleDirectors, maleActors, femaleActors`

## Contributing

All contributions are welcome. Before opening PRs, make sure that all tests are passing, and that code coverage is satisfactory:

```bash
.\vendor\bin\phpunit
```
