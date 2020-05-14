<?php

namespace Xylis\FakerCinema\Provider;

use Xylis\FakerCinema\Provider\BaseProvider;

/**
 * @author Xylis <julien.ravia@gmail.com>
 * @package Xylis\FakerCinema
 */
class Movie extends BaseProvider
{
    /** @var array */
    protected static $movies = array(
        'La La Land', 'Saving Private Ryan', 'Psycho', 'The Godfather', 'Singing in the rain', 'The Artist',
        'Parasite', 'Life is beautiful', 'American Beauty', 'The Professional', 'Once Upon a Time in the West',
        'Once Upon a Time in America', 'Casablanca', 'The Pianist', 'The Departed', 'Terminator', 'Terminator 2',
        'American History X', 'Interstellar', 'The Green Mile', 'The Dark Knight', 'Batman', 'Iron Man', 'Avengers',
        'Man of Steel', 'The Watchmen', '300', '12 Angry Men', 'A bout de souffle', 'Le mépris', 'Star Wars', 'Se7en',
        'City of God', 'Fight Club', 'Gone Girl', 'The Matrix', 'The Lord of the Rings', 'GoodFellas', 'Casino',
        'Inception', 'Forrest Gump', 'Star Wars Episode V : The Empire Strikes Back', 'Memento', 'Inside Out', 'Coco',
        'The Lion King', 'Old Boy', 'Django Unchained', 'Kill Bill', 'Paths of Glory', 'The Shining', 'Enemy',
        'Citizen Kane', 'Vertigo', 'Reservoir Dogs', 'Pulp Fiction', 'Inglorious Basterds', 'Edward Cisorhands',
        'Braveheart', 'Hacksaw Ridge', 'Amadeus', 'Taxi Driver', 'Toy Story', 'Toy Story 3', 'Good Will Hunting',
        'The Shawkawk Redemption', 'Gravity', 'Drive', 'The Neon Demon', 'Gladiator', 'Shame', '12 Years a Slave',
        'Blade Runner', 'Blade Runner 2049', 'Arrival', 'Incendies', 'Polytechnique', 'Black Swan', 'Mother!',
        'Rosemary\'s Baby', 'The Aviator', 'The Irishman', 'The Wolf of Wall Street', 'Ad Astra', 'We Own the Night',
        '2001 : A Space Odyssey', 'A Clockwork Orange', 'The Schindler List', 'The Good, The Bad and The Ugly',
        'Harakiri', 'Seven Samurai', 'Joker', 'Whiplash', 'The Prestige', 'Cinema Paradiso', 'Back to the Future',
        'Back to the Future 2', 'Your Name', 'Alien', 'Rear Window', 'North by Northwest', 'The Lobster', 'Zodiac',
        'The Great Dictator', 'Eternal Sunshine of the Spotless Mind', 'Amelie from Montmartre', 'Requiem for a Dream',
        'Snatch', 'Full Metal Jacket', 'Sicario', 'Dune', 'Aliens', 'Scarface', 'Lawrence of Arabie', 'Leto', 'Hugo',
        'Green Book', 'Three Billboards Outside Ebbing Misouri', 'Seven Psychopaths', 'Silence', 'Collateral',
        'Winter Sleep', 'Warrior', 'The Wolf of Wall Street', 'There Will Be Blood', 'V for Vendetta', 'Heat',
        'A Beautiful Mind', 'L.A. Confidential', 'Raging Bull', 'Ran', 'Monty Python : Holy Grail', 'Chinatown',
        'Andreï Roublev', 'Stalker', 'The Handmaiden', 'Logan', 'Room', 'The Room', 'The Grand Budapest Hotel',
        'Moonrise Kingdom', 'Fantastic Mr.Fox', 'Ford v Ferrari', 'Spotlight', 'The Help', 'Prisoners', 'Gran Torino',
        'Mad Max : Fury Road', 'Shutter Island', 'Mary and Max', 'Dragons', 'Into the Wild', 'No Country for Old Men',
        'The Big Lebowski', 'Memories of Murder', 'Kill Bill Vol.1', 'Kill Bill Vol.2', 'Batman Returns', 'Babel',
        'Catch me if you can', 'Finding Nemo', 'The Sixth Sense', 'Unbreakable', 'Signs', 'Avatar', 'Titanic',
        'In the Mood for Love', 'Trainspotting', 'The Truman Show', 'Fargo', 'Jurassic Park', 'Stand by Me',
        'Grease', 'Platoon', 'The Deer Hunter', 'Paris, Texas', 'The Thing', 'The Hateful Height', 'Elephant Man',
        'Once Upon a Time In Hollywood', 'The Life of Brian', 'Creed', 'The Social Network', 'Panic Room', 'Persona',
        'The Girl with a Dragon Tatoo', 'Ben-hur', 'Suspiria', 'Akira', 'Jaws', 'Apocalypse Now', 'Ghostbusters',
        'Eyes Wide Shut', 'Skyfall', 'Blow Out', 'Carrie', 'Carlito\'s Way', 'Mission : Impossible', 'Cotton Club'
    );

    /** @var array */
    protected static $sagas = array(
        'The Lords of The Ring Trilogy', 'Star Wars', 'Marvel Cinematic Universe', 'Harry Potter', 'Avengers', 'Scream',
        'Spider-man Trilogy', 'Back to the Future', 'The Matrix Trilogy', 'The Hobbit Trilogy', 'Jason Bourne', 'Shrek',
        'The Godfather Trilogy', 'Pirates of the Carraibean', 'Alien', 'X-Men', 'Ice of Age', 'Terminator', 'Die Hard',
        'Home Alone', 'The Dark Knight Trilogy', 'Indiana Jones', 'Ocean\'s', 'Rocky', 'Saw', 'American Pie', 'Rambo',
        'Planet of the Apes', 'Transformers', 'Toy Story', 'Despicable Me', 'Mad Max', 'Star Trek', 'Fast & Furious',
        'Underworld', 'Resident Evil', 'Taken', 'Jurassic Park', 'Twilight', 'Hunger Games', 'Narnia', 'Men in Black',
        'Mission Impossible', 'Battle Royale', 'Blade Runner', 'James Bond 007', 'Sin City', 'Hannibal', 'Millenium'
    );

    /** @var array */
    protected static $genres = array(
        'Comedy', 'Action', 'Adventure', 'Thriller', 'Music', 'Suspense', 'Drama', 'Crime', 'Romance', 'Animation',
        'Fantasy', 'Science Fiction', 'Western', 'War', 'History', 'Mystery', 'Horror', 'Biography', 'Documentary',
        'Family', 'TV Movie'
    );

    /** @var array */
    protected static $studios = array(
        'A24', '20th Century Fox', 'Dreamworks', 'Pixar', 'Walt Disney Studios', 'Marvel Studios', 'Lucasfilm',
        'Universal Pictures', 'Warner Bros', 'Paramount', 'New Line Cinema', 'Fox Searchlight Pictures', 'Fox 2000',
        'Focus Features', 'Sony PictureS', 'TriStar', 'Columbia Pictures', 'Amblin', 'Blumhouse', 'Lionsgate',
        'A Band Apart', 'American Zoetrope', 'Miramax Films', 'Bad Robot', 'Weinstein Company', 'The Asylum',
        'Gaumont', 'UGC', 'New Line Cinema', 'Studio Canal', 'Regency', 'Legendary Pictures', 'Syncopy'
    );

    /**
     * @return string
     */
    public static function movie()
    {
        return static::randomElement(static::$movies);
    }

    /**
     * @return string
     */
    public static function movieGenre()
    {
        return static::randomElement(static::$genres);
    }

    /**
     * @return string
     */
    public static function saga()
    {
        return static::randomElement(static::$sagas);
    }

    /**
     * @return string
     */
    public static function studio()
    {
        return static::randomElement(static::$studios);
    }

    /**
     * @param int $count
     * @param bool $unique
     * @return array<string>
     */
    public static function movies($count = self::DEFAULT_COUNT, $unique = true)
    {
        return static::generateMultiple(static::$movies, $count, $unique);
    }

    /**
     * @param int $count
     * @param bool $unique
     * @return array<string>
     */
    public static function movieGenres($count = self::DEFAULT_COUNT, $unique = true)
    {
        return static::generateMultiple(static::$genres, $count, $unique);
    }

    /**
     * @param int $count
     * @param bool $unique
     * @return array<string>
     */
    public static function sagas($count = self::DEFAULT_COUNT, $unique = true)
    {
        return static::generateMultiple(static::$sagas, $count, $unique);
    }

    /**
     * @param int $count
     * @param bool $unique
     * @return array<string>
     */
    public static function studios($count = self::DEFAULT_COUNT, $unique = true)
    {
        return static::generateMultiple(static::$studios, $count, $unique);
    }

    /**
     * @param int $max
     * @return string
     */
    public function runtime($max = 6)
    {
        $max = (is_int($max)) ? $max : 6;

        return $this->generator->time('H:i:s', $max * 60 * 60);
    }

    /**
     * @return string
     */
    public function overview()
    {
        return $this->generator->realText(mt_rand(250, 1000));
    }

    public static function getMovies()
    {
        return static::$movies;
    }
}
