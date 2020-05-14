<?php

namespace Xylis\FakerCinema\Provider;

use Xylis\FakerCinema\Provider\BaseProvider;

/**
 * @author Xylis <julien.ravia@gmail.com>
 * @package Xylis\FakerCinema
 */
class TvShow extends BaseProvider
{
    /** @var array */
    protected static $shows = array(
        'American Horror Story', 'Stranger Things', 'Homeland', 'True Detective', 'Castle Rock', 'Dexter', 'Louie',
        'The Wire', 'The Sopranos', 'Six Feet Under', 'LOST', 'The Leftovers', 'Game of Thrones', 'Utopia', 'Ozark',
        'South Park', 'Rick and Morty', 'The Simpsons', 'American Dad', 'Malcolm in the Middle', 'Twin Peaks',
        'Better Call Saul', 'Breaking Bad', 'The Office', 'The Walking Dead', 'Friends', 'How I Met Your Mother', 'Oz',
        'Black Mirror', 'Orange is the New Black', 'Sex Education', 'Westworld', 'The Crown', 'Mad Men', 'Fargo',
        'Peaky Blinders', 'Watchmen', 'Sharp Objects', 'Seinfield', 'Chuck', 'Monk', 'Brooklyn Nine-Nine', 'Dark',
        'Arrested Development', 'Silicon Valley', 'GLOW', 'LOVE', 'Master of None', 'Outlander', 'American Crime Story',
        'The Witcher', 'The Big Bang Theory', 'Sherlock', 'Community', 'Chernobyl', 'Tales From the Loop', 'Barry',
        'Atlanta', 'Vinyl', 'Mindhunter', 'Maniac', 'The Haunting of Hill House', 'The Eddy', 'Unbelievable', 'Fleabag',
        'Mr. Robot', 'Marvel\'s Daredevil', 'The Knick', 'Too Old to Die Young', 'The Americans', 'Doctor Who',
        'Penny Dreadful', 'Devs', 'Altered Carbon', 'Star Trek : Picard', 'Big Little Lies', 'The Good Place', 'Rome',
        'The Handmaid\'s Tale', 'Sneaky Pete', 'Dear White People', 'Undone', 'The Plot Against America', 'Suits',
        'BoJack Horseman', 'Sense 8', '24', 'Shameless US', 'Californication', 'Scrubs', 'Le Bureau des Légendes',
        'Prison Break', 'Billions', 'Banshee', 'Entourage', 'Person of Interest', 'Futurama', 'Fringe', 'Louie',
        'Flight of the Conchords', 'The Expanse', 'Marvel\'s The Punisher', 'Boardwalk Empire', 'Hannibal', 'Spartacus',
        'Adventure Time', 'Deadwood', 'Skins', 'Shameless UK', 'The Newsroom', 'Archer', 'X-Files', 'The Blacklist',
        'Parks and Recreation', 'Sons of Anarchy', 'The Grand Tour', 'This Is Us', 'Curb Your Enthusiasm', 'The Boys',
        'House', 'Freaks and Geeks', 'The Mandalorian', 'It\'s Always Sunny in Philadelphia', 'Narcos', 'The Night Of',
        'House of Cards', 'The Twilight Zone', 'Gravity Falls', 'Supernatural', 'Batman: The Animated Series',
        'The Deuce', 'Desperate Housewives', 'Wet Hot American Summer', '11.22.63', 'Bates Motel', '13 Reasons Why',
        'F is for Family', 'Legion', 'Marvel\'s Iron Fist', 'Marvel\'s Jessica Jones', 'Marvel\'s The Defenders',
        'Marvel\'s Luke Cage', 'Two and a Half-men', 'Taboo', 'The Gifted', 'The OA', 'Preacher', 'Death Note',
        'American Gods', 'Big Mouth', 'The Big Bang Theory', 'Blindspot', 'The 100', 'Killing Eve', 'Family Guy',
        'Bones', 'Smallville', 'The Mentalist', 'Designated Survivor', 'Euphoria', 'Scandal', 'Gomorra', 'Arrow',
        'The Masters of Sex', 'Bloodline', 'The Affair', 'Ray Donovan', 'Kidding', 'House of Lies', 'The Tudors',
    );

    /** @var array */
    protected static $networks = array(
        'ABC', 'NBC', 'Netflix', 'AMC', 'HBO', 'CBS', 'The CW', 'Fox', 'Disney Channel', 'Disney+',
        'Syfy', 'USA Network', 'Showtime', 'Starz', 'Cinemax', 'Hulu', 'Epix', 'A&E', 'Channel4', 'Comedy Central',
        'Amazon', 'Crunchyroll', 'Canal', 'Adult Swim', 'ARTE',
    );

    /** @var array */
    protected static $genres = array(
        'Comedy', 'Action', 'Adventure', 'Thriller', 'Crime', 'Suspense', 'Drama', 'Music', 'Romance', 'Animation',
        'Fantasy', 'Science-fiction', 'Western', 'War', 'History', 'Mystery', 'Horror', 'Biography', 'Documentary',
        'Teen', 'Sitcom', 'Family', 'Music', 'Kids', 'News', 'Reality', 'Soap', 'Talk', 'Politic'
    );

    /**
     * @return string
     */
    public static function tvShow()
    {
        return static::randomElement(static::$shows);
    }

    /**
     * @return mixed
     */
    public static function showGenre()
    {
        return static::randomElement(static::$genres);
    }

    /**
     * @return string
     */
    public static function tvNetwork()
    {
        return static::randomElement(static::$networks);
    }

    /**
     * @param int|string<int>|null $count
     * @param bool $unique
     * @return array<string>
     */
    public static function tvShows($count = self::DEFAULT_COUNT, $unique = true)
    {
        return static::generateMultiple(static::$shows, $count, $unique);
    }

    /**
     * @param int|string<int>|null $count
     * @param bool $unique
     * @return array<string>
     */
    public static function tvNetworks($count = self::DEFAULT_COUNT, $unique = true)
    {
        return static::generateMultiple(static::$networks, $count, $unique);
    }

    /**
     * @param int|string<int>|null $count
     * @param bool $unique
     * @return array<string>
     */
    public static function tvGenres($count = self::DEFAULT_COUNT, $unique = true)
    {
        return static::generateMultiple(static::$genres, $count, $unique);
    }

    /**
     * @param int|string<int> $min
     * @param int|string<int> $max
     * @return int
     */
    public static function tvShowTotalEpisodes($min = 6, $max = 650)
    {
        $min = is_numeric($min) ? $min : 6;
        $max = is_numeric($max) ? $max : 650;

        return mt_rand($min, $max);
    }

    /**
     * @param int|string<int> $min
     * @param int|string<int> $max
     * @return int
     */
    public static function tvShowTotalSeasons($min = 1, $max = 25)
    {
        $min = is_numeric($min) ? $min : 1;
        $max = is_numeric($max) ? $max : 25;

        return mt_rand($min, $max);
    }

    /**
     * @param int|string<int> $min
     * @param int|string<int> $max
     * @return int
     */
    public static function tvShowEpisodesRuntime($min = 5, $max = 90)
    {
        $min = is_numeric($min) ? $min : 5;
        $max = is_numeric($max) ? $max : 90;

        return mt_rand($min, $max);
    }

    /**
     * @param int|string<int> $min
     * @param int|string<int> $max
     * @return string
     */
    public function overview($min = 250, $max = 1000)
    {
        $min = is_numeric($min) ? $min : 250;
        $max = is_numeric($max) ? $max : 1000;

        return $this->generator->realText(mt_rand($min, $max));
    }
}
