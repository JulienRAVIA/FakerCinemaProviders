<?php

namespace Xylis\FakerCinema\Provider;

use Faker\Provider\Base as FakerProvider;

/**
 * @package Xylis\FakerCinema
 */
abstract class BaseProvider extends FakerProvider
{
    const MALE_GENDER   = 'male';
    const FEMALE_GENDER = 'female';
    const DEFAULT_COUNT = 3;

    /**
     * @param array<string> $var
     * @param int|string|null $count
     * @param bool $duplicates
     * @return array<string>
     */
    protected static function generateMultiple($var, $count = self::DEFAULT_COUNT, $duplicates = false)
    {
        $count = is_numeric($count)
            ? (int) $count
            : (int) count($var)
        ;

        return static::randomElements($var, $count, $duplicates);
    }

    /**
     * @param string $gender
     * @param array<string> $m
     * @param array<string> $f
     * @return array<string>
     */
    protected static function sortByGender($gender, $m, $f)
    {
        if (!in_array($gender, array(self::MALE_GENDER, self::FEMALE_GENDER), true)) {
            return array_merge($m, $f);
        }

        return ($gender === 'm') ? $m : $f;
    }
}
