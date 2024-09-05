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

    /** @var array */
    protected static $images_path = array(
        '/5hKlKh62yIR03XHZxwFs3EaIFfD.jpg', '/gLhHHZUzeseRXShoDyC4VqLgsNv.jpg', '/sa3Ku5yNVjp8NloWxJoI9dQjvOi.jpg',
        '/ym1dxyOk4jFcSl4Q2zmRrA5BEEN.jpg', '/2NQljeavtfl22207D1kxLpa4LS3.jpg', '/4j0PNHkMr5ax3IA8tjtxcmPU3QT.jpg',
        '/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg', '/dAyJqJ8KoglZysttC6BfVmDFQUt.jpg', '/3bhkrj58Vtu7enYsRolD1fZdja1.jpg',
        '/sGvcWcI99OTXLzghD7qXw00KaY5.jpg', '/naya0zF4kT401Sx15AtwB9vpcJr.jpg', '/iREd0rNCjYdf5Ar0vfaW32yrkm.jpg',
        '/iB64vpL3dIObOtMZgX3RqdVdQDc.jpg', '/8Gxv8gSFCU0XGDykEGv7zR1n2ua.jpg', '/a7KyFMPXj0iY4EoLq1PIGU1WJPw.jpg',
        '/h8Rb9gBr48ODIwYUttZNYeMWeUU.jpg', '/y4MBh0EjBlMuOzv9axM4qJlmhzz.jpg', '/4x9FmvdJ464Fg7A9XcbYSmxfVw3.jpg',
        '/gGEsBPAijhVUFoiNpgZXqRVWJt2.jpg', '/gOnmaxHo0412UVr1QM5Nekv1xPi.jpg', '/s5HQf2Gb3lIO2cRcFwNL9sn1o1o.jpg',
        '/ym7Kst6a4uodryxqbGOxmewF235.jpg', '/w46Vw536HwNnEzOa7J24YH9DPRS.jpg', '/fiVW06jE7z9YnO4trhaMEdclSiC.jpg',
        '/z8onk7LV9Mmw6zKz4hT6pzzvmvl.jpg', '/wjD6lr6vi9DIwwyDZaOjGpIbulu.jpg', '/or06FN3Dka5tukK1e9sl16pB3iy.jpg',
        '/mIBCtPvKZQlxubxKMeViO2UrP3q.jpg', '/wKiOkZTN9lUUUNZLmtnwubZYONg.jpg', '/vnRthEZz16Q9VWcP5homkHxyHoy.jpg',
        '/cgYg04miVQUAG2FKk3amSnnHzOp.jpg', '/2H1TmgdfNtsKlU9jKdeNyYL5y8T.jpg', '/xbSuFiJbbBWCkyCCKIMfuDCA4yV.jpg',
        '/9xjZS2rlVxm8SFx8kPC3aIGCOYQ.jpg', '/6b7swg6DLqXCO3XUsMnv6RwDMW2.jpg', '/kAVRgw7GgK1CfYEJq8ME6EvRIgU.jpg',
        '/jlk5MeGlNSiy773SWot9dGAQ2as.jpg', '/wc7XQbfx6EIQqCuvmBMt3aisb2Y.jpg', '/5aOyriWkPec0zUDxmHFP9qMmBaj.jpg',
        '/7WsyChQLEftFiDOVTGkv3hFpyyt.jpg', '/2mxS4wUimwlLmI1xp6QW6NSU361.jpg', '/kVG8zFFYrpyYLoHChuEeOGAd6Ru.jpg',
        '/gh4cZbhZxyTbgxQPxD0dOudNPTn.jpg', '/d08HqqeBQSwN8i8MEvpsZ8Cb438.jpg', '/teCy1egGQa0y8ULJvlrDHQKnxBL.jpg',
        '/tBiUXvCqz34GDeuY7jK14QQdtat.jpg', '/9NXAlFEE7WDssbXSMgdacsUD58Y.jpg', '/tnAuB8q5vv7Ax9UAEje5Xi4BXik.jpg',
        '/wToO8opxkGwKgSfJ1JK8tGvkG6U.jpg', '/4VlXER3FImHeFuUjBShFamhIp9M.jpg', '/sgheSKxZkttIe8ONsf2sWXPgip3.jpg',
        '/2OaprROMZZeiWsydjGUIkXrv2Z3.jpg', '/uiFcFIjig0YwyNmhoxkxtAAVIL2.jpg', '/4jeFXQYytChdZYE9JYO7Un87IlW.jpg',
        '/dU4HfnTEJDf9KvxGS9hgO7BVeju.jpg', '/jrgifaYeUtTnaH7NF5Drkgjg2MB.jpg', '/oZRVDpNtmHk8M1VYy1aeOWUXgbC.jpg',
        '/fSRb7vyIP8rQpL0I47P3qUsEKX3.jpg', '/wjOHjWCUE0YzDiEzKv8AfqHj3ir.jpg', '/s1VzVhXlqsevi8zeCMG9A16nEUf.jpg',
        '/8qOTi8VXvnuLH0jijMBCyygtV9d.jpg', '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', '/jhWbYeUNOA5zAb6ufK6pXQFXqTX.jpg',
        '/wVYREutTvI2tmxr6ujrHT704wGF.jpg', '/1aXHPI8ZvZYIEcQWf2NT5f44T0X.jpg', '/9z4jRr43JdtU66P0iy8h18OyLql.jpg',
        '/5YoSFqpTz5qIxsX61CPMGKONQIY.jpg', '/3BSxAjiporlwQTWzaHZ9Yrl5C9D.jpg', '/woTQx9Q4b8aO13jR9dsj8C9JESy.jpg',
        '/gPbM0MK8CP8A174rmUwGsADNYKD.jpg', '/uDsvma9dAwnDPVuCFi99YpWvBk0.jpg', '/zfE0R94v1E8cuKAerbskfD3VfUt.jpg',
        '/A7AoNT06aRAc4SV89Dwxj3EYAgC.jpg', '/qsdjk9oAKSQMWs0Vt5Pyfh6O4GZ.jpg', '/fECBtHlr0RB3foNHDiCBXeg9Bv9.jpg',
        '/kgwjIb2JDHRhNk13lmSxiClFjVk.jpg', '/ken2sQbCqZuAYmgPknrChXvkrEK.jpg', '/438QXt1E3WJWb3PqNniK0tAE5c1.jpg',
        '/z7uo9zmQdQwU5ZJHFpv2Upl30i1.jpg', '/plcZXvI310FkbwIptvd6rqk63LP.jpg', '/ujr5pztc1oitbe7ViMUOilFaJ7s.jpg',
        '/l2fgb4JU0uLpWTaMFrxPqfQ94Kr.jpg', '/rjkmN1dniUHVYAtwuV3Tji7FsDO.jpg', '/2lEyzOq6ILNgBpLLpTRckQhbNNt.jpg',
        '/iUlP6aUCyGh3aEEU0DmnFaJlAOg.jpg', '/uYxrWr9o44yO0HvVfFFHGu01gfX.jpg', '/gNPqcv1tAifbN7PRNgqpzY8sEJZ.jpg',
        '/hXWBc0ioZP3cN4zCu6SN3YHXZVO.jpg', '/jyzrfx2WaeY60kYZpPYepSjGz4S.jpg', '/7gKI9hpEMcZUQpNgKrkDzJpbnNS.jpg',
        '/74xTEgt7R36Fpooo50r9T25onhq.jpg', '/9Gtg2DzBhmYamXBS1hKAhiwbBKS.jpg', '/2Gfjn962aaFSD6eST6QU3oLDZTo.jpg',
        '/9z36SzknysvC5EnWK8hOnlCW6rA.jpg', '/f18rGcLlawKjNC5KRh36S0mvRlY.jpg', '/kb4s0ML0iVZlG6wAKbbs9NAm6X.jpg',
        '/evxtv4e8Amm436Y5rW16RkGu8pX.jpg', '/qi9r5xBgcc9KTxlOLjssEbDgO0J.jpg', '/cvsXj3I9Q2iyyIo95AecSd1tad7.jpg',
        '/liLN69YgoovHVgmlHJ876PKi5Yi.jpg', '/qVdrYN8qu7xUtsdEFeGiIVIaYd.jpg', '/5xeNPGbM8ImVdJACUoGpXT8Pxx3.jpg',
        '/aWxwnYoe8p2d2fcxOqtvAtJ72Rw.jpg', '/wDWwtvkRRlgTiUr6TyLSMX8FCuZ.jpg', '/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg',
        '/od22ftNnyag0TTxcnJhlsu3aLoU.jpg', '/pi0iZOEHeA3ih4p1IwAG4x2DZNH.jpg', '/lUPDGT3lyRrq8SvWuNWG2DP64bR.jpg',
        '/zUTkjET8VUwvbvSHtn0Lou7xwyZ.jpg', '/w5JjiB3O1CLDXbTJe1QpU5RHmlU.jpg', '/pfte7wdMobMF4CVHuOxyu6oqeeA.jpg',
        '/A3ZbZsmsvNGdprRi2lKgGEeVLEH.jpg', '/5weKu49pzJCt06OPpjvT80efnQj.jpg', '/r2J02Z2OpNTctfOSN1Ydgii51I3.jpg',
        '/6FsGeIp7heHm5eh4tIxTzHIRxmt.jpg', '/kyeqWdyUXW608qlYkRqosgbbJyK.jpg', '/xqECHNvzbDL5I3iiOVUkVPJMSbc.jpg',
        '/vIeu8WysZrTSFb2uhPViKjX9EcC.jpg', '/qcNDxDzd5OW9wE3c8nWxCBQoBrM.jpg', '/4GIeI5K5YdDUkR3mNQBoScpSFEf.jpg',
        '/62HCnUTziyWcpDaBO2i1DX17ljH.jpg', '/8oibiRBkwSHFDamazdrEB5fWvXN.jpg', '/pIkRyD18kl4FhoCNQuWxWu5cBLM.jpg',
        '/to0spRl1CMDvyUbOnbb4fTk3VAd.jpg', '/8Vt6mWEReuy4Of61Lnj5Xj704m8.jpg', '/pFlaoHTZeyNkG83vxsAJiGzfSsa.jpg',
        '/aWeKITRFbbwY8txG5uCj4rMCfSP.jpg', '/36wyM5ceCCIpu8lU88mxonYET71.jpg', '/sdEOH0992YZ0QSxgXNIGLq1ToUi.jpg',
        '/qdq40gRS8xKnpFt5V75t6lUHgpx.jpg', '/rktDFPbfHfUbArZ6OOOKsXcv0Bm.jpg', '/2lUYbD2C3XSuwqMUbDVDQuz9mqz.jpg',
        '/kuf6dutpsT0vSVehic3EZIqkOBt.jpg', '/ic0intvXZSfBlYPIvWXpU1ivUCO.jpg', '/t79ozwWnwekO0ADIzsFP1E5SkvR.jpg',
        '/8riWcADI1ekEiBguVB9vkilhiQm.jpg', '/sKCr78MXSLixwmZ8DyJLrpMsd15.jpg', '/vFIHbiy55smzi50RmF8LQjmpGcx.jpg',
        '/bwdLflvCcOCRPqb1x13KPuYIzVx.jpg', '/rzRb63TldOKdKydCvWJM8B6EkPM.jpg', '/9E2y5Q7WlCVNEhP5GiVTjhEhx1o.jpg',
        '/kiX7UYfOpYrMFSAGbI6j1pFkLzQ.jpg', '/6DrHO1jr3qVrViUO6s6kFiAGM7.jpg', '/c3e9e18SSlvFd1cQaGmUj5tqL5P.jpg',
        '/uS1AIL7I1Ycgs8PTfqUeN6jYNsQ.jpg', '/lCanGgsqF4xD2WA5NF8PWeT3IXd.jpg', '/mFp3l4lZg1NSEsyxKrdi0rNK8r1.jpg',
        '/dm06L9pxDOL9jNSK4Cb6y139rrG.jpg', '/6WBeq4fCfn7AN0o21W9qNcRF2l9.jpg', '/94RaS52zmsqaiAe1TG20pdbJCZr.jpg',
        '/4q2hz2m8hubgvijz8Ez0T2Os2Yv.jpg', '/4dlrpSf3q1GAgBUOjnemHP06QHC.jpg', '/wlbov6pkgySqYZilZcO54f29Dg1.jpg',
        '/u3B2YKUjWABcxXZ6Nm9h10hLUbh.jpg', '/tiZF8b9T9fMcwvsEEkJ5ik1wCnV.jpg', '/iCvgemXf2Kpr2LvpDmt5J9NhjKM.jpg',
        '/8gLhu8UFPZfH2Hv11JhTZkb9CVl.jpg', '/nb9fc9INMg8kQ8L7sE7XTNsZnUX.jpg', '/psiWp3VTjznfokmGQG9uqiiknQQ.jpg',
        '/iDdGfdNvY1EX0uDdA4Ru77fwMfc.jpg', '/n8ZpMwYT02XjpQHpSxn1eJw5Zpz.jpg', '/d9nBoowhjiiYc4FBNtQkPY7c11H.jpg',
        '/78lPtwv72eTNqFW9COBYI0dWDJa.jpg', '/wuMc08IPKEatf9rnMNXvIDxqP4W.jpg', '/c54HpQmuwXjHq2C9wmoACjxoom3.jpg',
        '/pufQvXrrxng95dT4kYlQtXn98kK.jpg', '/wfGfxtBkhBzQfOZw4S8IQZgrH0a.jpg', '/uvYbo4eF3q6W06kpx5iDwC4jt6N.jpg',
        '/ewF3IlGscc7FjgGEPcQvZsAsgAW.jpg', '/ablrE8IbWcIrAxMmm4gnPn75AMS.jpg', '/34m2tygAYBGqA9MXKhRDtzYd4MR.jpg',
        '/lotWiuWuTGlQ94rzBdy6ZmKZnTA.jpg', '/ceG9VzoRAVGwivFU403Wc3AHRys.jpg', '/sv1xJUazXeYqALzczSZ3O6nkH75.jpg',
        '/RYMX2wcKCBAr24UyPD7xwmjaTn.jpg', '/keGfSvCmYj7CvdRx36OdVrAEibE.jpg', '/xayG1dbIjJkmvimekx6TNrMOXmA.jpg',
        '/v28T5F1IygM8vXWZIycfNEm3xcL.jpg', '/AkJQpZp9WoNdj7pLYSj1L0RcMMN.jpg', '/iiZZdoQBEYBv6id8su7ImL0oCbD.jpg',
        '/tePFnZFw5JvjwjQjaKkqDPNMLPU.jpg', '/dQNJ8SdCMn3zWwHzzQD2xrphR1X.jpg', '/v55tfjL3QGeabkXAMXPb4olwjL0.jpg',
        '/uXDfjJbdP4ijW5hWSBrPrlKpxab.jpg', '/j8szC8OgrejDQjjMKSVXyaAjw3V.jpg', '/tmlDFIUpGRKiuWm9Ixc6CYDk4y0.jpg',
        '/l5uxY5m5OInWpcExIpKG6AR3rgL.jpg', '/n1GSxFcDaZ6lMVf21M0KloPfuhu.jpg', '/c24sv2weTHPsmDa7jEMN0m2P3RT.jpg',
        '/qNBAXBIQlnOThrVvA6mA2B5ggV6.jpg', '/iGoXIpQb7Pot00EEdwpwPajheZ5.jpg', '/nygOUcBKPHFTbxsYRFZVePqgPK6.jpg',
        '/5DNRr2juXdwtvktwXxwuk9Usk8O.jpg', '/Af4bXE63pVsb2FtbW8uYIyPBadD.jpg', '/8hdVTMczTVcKEGgdL7ze5Xfor4n.jpg',
        '/NNxYkU70HPurnNCSiCjYAmacwm.jpg', '/mtkPe9AMiXloYPCsldSbxKuXXWJ.jpg', '/1HOYvwGFioUFL58UVvDRG6beEDm.jpg',
        '/qnqGbB22YJ7dSs4o6M7exTpNxPz.jpg', '/nD4M4Bx457ryLuKYpxFwQ2IBJ5w.jpg'
    );

    /** @var string */
    protected static $image_uri = 'https://image.tmdb.org/t/p/original';

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

    /**
     * @return string
     */
    public function image()
    {
        return static::$image_uri . static::randomElement(static::$images_path);
    }

    public function images($count = self::DEFAULT_COUNT, $unique = true)
    {
        $paths = static::generateMultiple(static::$images_path, $count, $unique);

        return array_map(function($path){ return static::$image_uri . $path; }, $paths);
    }
}
