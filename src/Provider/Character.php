<?php

namespace Xylis\FakerCinema\Provider;

use Xylis\FakerCinema\Provider\BaseProvider;

class Character extends BaseProvider
{
    /** @var array */
    protected static $maleCharacters = array(
        'Michael Scott', 'Dwight Schrute', 'Walter White', 'Jesse Pinkman', 'Dexter Morgan', 'Cobb', 'Neo', 'Morpheus',
        'Agent Smith', 'Bruce Wayne', 'Jim Gordon', 'Batman', 'Superman', 'Iron Man', 'Hulk', 'Captain America',
        'Valentine', 'Benjamin Button', 'David Mills', 'Jack Torrance', 'Danny Torrance', 'Kevin McCallister',
        'Dick Hallorann', 'Darth Vader', 'Luke Skywalker', 'Vincent Vega', 'Mr Blonde', 'Mr Pink', 'Mr Brown',
        'Hans Landa', 'Mr White', 'Mr Orange', 'Mr Blue', 'Lt. Aldo Raine', 'Sgt. Sergent Donnie Donowitz', 'Legolas',
        'Frederic Zoller', 'Budd', 'Cliff Booth', 'Rick Dalton', 'Randle McMurphy', 'Norman Bates', 'Maximus',
        'Inigo Montoya', 'Hal', 'Groot', 'Hodor', 'Ethan Hunt', 'Bane', 'The Joker', 'Arthur Fleck', 'Leon',
        'Woody', 'Buzz Lightyear', 'V', 'Roy Batty', 'Rick Deckard', 'Samwise Gamgee', 'Frodon Sacquet', 'Harry Potter',
        'Ron Weasley', 'Severus Snape', 'Lord Dumbledore', 'George Weasley', 'Donnie Darko', 'Kirk', 'Picard',
        'Star-Lord', 'Rocket Racoon', 'Thanos', 'Lex Luthor', 'Tony Montana', 'Gollum', 'Bilbo Baggins',
        'Vito Corleone', 'Truman', 'Dr. King Schultz', 'Ace Ventura', 'Obi-Wan Kenobi', 'Harry Calahan', 'Tommy DeVito',
        'Anton Chigurh', 'Lou Bloom', 'Keyser Söze', 'Ferris Bueller', 'Peter Parker', 'Spiderman', 'Tony Stark',
        'Yoda', 'Rocky Balboa', 'John Rambo', 'Jules Winnfield', 'Peter Venkman', 'Gandalf', 'Snake Plissken',
        'T-800', 'Forrest Gump', 'William Wallace', 'Patrick Bateman', 'Ash', 'Travis Bickle', 'Hannibal Lecter',
        'Doc Brown', 'Marty McFly', 'Loki', 'Ron Burgundy', 'Aragorn', 'Jack Sparrow', 'Michael Corleone', 'The Dude',
        'Tyler Durden', 'John McClane', 'Han Solo', 'James Bond', '007', 'Indiana Jones', 'Max Rockatansky', 'Baymax',
        'Barney Stinson', 'Ted Mosby', 'Marshall Eriksen', 'Beetlejuice', 'Edward Scissorhands', 'Charlie Brown',
        'Chewbacca', 'Edward Cullen', 'Eric Cartman', 'Stan Marsh', 'Randy Marsh', 'Kenny McCornick', 'Hellboy',
        'Homer Simpson', 'Bart Simpson', 'Jack Skellington', 'King Kong', 'Jason Bourne', 'Sheldon Cooper', 'Spock',
        'Thor', 'Willy Wonka', 'Jim Halpert', 'Don Draper', 'Tony Soprano', 'John Locke', 'Daryl Dixon', 'Negan',
        'Matt Murdock', 'Frank Underwood', 'Omar Little', 'Jack Bauer', 'Sherlock Holmes', 'Tyrion Lannister',
        'Creed', 'Kevin Malone', 'Andy Bernard', 'Creed Bratton', 'Hank Schrader', 'Saul Goodman', 'Chris Mannix',
        'Rorschach', 'Dr Manhattan', 'Ozymandias', 'Vic Vega', 'Marsellus Wallace', 'Butch Coolidge', 'Teddy Daniels',
        'Jack Dawson', 'Calvin Candie', 'Hugh Glass', 'Oswaldo Mobray', 'John Ruth', 'Major Marquis Warren','Gus Fring',
        'Joe Gage', 'Marco the Mexican', 'Alfred Pennyworth', 'Alex DeLarge', 'Sergeant Hartman', 'Oscar Martinez',
        'Kevin Garvey', 'Matt Jamison', 'Tom Garvey', 'Joseph Cooper', 'Bill', 'Hubert Bonisseur de la Bath',
        'Noel Flantier', 'Asterix', 'Obelix', 'Tintin', 'Simon Jeremy', 'Panoramix', 'Serge Karamazov', 'Segent Biales',
        'Elijah Price', 'David Dunn', 'Kevin Wendell Crumb', 'McLovin', 'Nick Dunne', 'Walt Kowalski', 'Kylo Ren',
        'Jar Jar Binks', 'R2-D2', 'C-3PO', 'Mace Windu', 'Poe Dameron', 'Llewyn Davis', 'BB-8', 'Lando Calrissian',
        'Boba Fett', 'Qui-Gon Jinn', 'Admiral Gial Ackbar', 'Count Doku', 'Darth Sidious', 'Palpatine', 'Jake Sully',
    );

    /** @var array */
    protected static $femaleCharacters = array(
        'Mia Wallace', 'Daisy Domergue', 'Jackie Brown', 'Beatrix Kiddo', 'The Bride', 'Elle Driver', 'O-Ren Ishii',
        'Shosanna Dreyfus', 'Bridget Von Hammersmark', 'Broomhilda Von Shaft', 'Vernita Green', 'Julie Dreyfus',
        'Sofie Fatale', 'Nora Durst', 'Jill Garvey', 'Laurie Garvey', 'Kate Austen', 'Leia Organa', 'Hermione Granger',
        'Juno', 'Peggy Olson', 'Monica Geller', 'Sansa Stark', 'Amy Dunne', 'Brienne of Tarth', 'Black Widow',
        'Wonder Woman', 'Cersei Lannister', 'Xena', 'Eleven', 'Mulan', 'Veronica Mars', 'Rachel Green', 'Ellen Ripley',
        'Katniss Everdeen', 'Clarice Starling', 'Furiosa', 'Claire Underwood', 'Arya Stark', 'Rey', 'Phoebe Buffay',
        'Mary Poppins', 'Daenerys Targaryen', 'Skyler White', 'Leslie Knope', 'Dana Scully', 'Miranda Priestley',
        'Buffy Summers', 'Scarlett Witch', 'Sarah Connor', 'Pam Beesly', 'Angela Martin', 'Kelly Kapoor', 'Cher',
        'Marge Gunderson', 'Bridget Jones', 'Elastigirl', 'Moana', 'Elle Woods', 'Harley Quinn', 'Leeloo', 'Catwoman',
        'Selina Kyle', 'Poison Ivy', 'Jyn Erso', 'Elisabeth Bennet', 'Rose DeWitt Bukater', 'Regina George',
        'Padme Amidala', 'Chihiro Ogino', 'Jean Grey', 'Mystique', 'Tomb Raider', 'Lara Croft', 'Lois Lane', 'Michonne',
        'Margaery Tyrell', 'Lily Aldrin', 'Robin Scherbatsky', 'Marge Simpson', 'Lisa Simpson', 'Maggie Simpson',
        'Miranda Bailey', 'Debra Morgan', 'Jessica Jones', 'Gamora', 'Claire Bennet', 'Miranda Hobbes', 'Mal Cobb',
        'Annalise Keating', 'Hannah Horvath', 'Mary Jane Watson', 'Gwen Stacy', 'Carrie Mathison', 'Selina Meyer',
        'Hit Girl', 'Louise Banks', 'Rachel Dawes', 'Joi', 'Rachael', 'Pris', 'Amelie Poulain', 'Mathila Lando',
        'Kim Wexler', 'Offred', 'Penny', 'Hannah Baker', 'Bella Swan', 'Anastasia Steele', 'Rue Bennett',
        'Fiona Gallagher', 'Bree Van de Kamp', 'Gabrielle Solis', 'Eddie Britt', 'Lynette Scavo', 'Susan Mayer',
        'Amelia Brand', 'Murphy Cooper', 'Miranda Tate', 'Odile Deray', 'M', 'Vesper Lynd', 'Madeleine Swann',
        'Wendy Torrance', 'Martha Wayne', 'Captain Phasma', 'Phyllis Lapin', 'Meredith Palmer', 'Erin Hannon',
    );

    /**
     * @param string|null $gender
     * @return string
     */
    public static function character($gender = null)
    {
        $characters = static::sortByGender($gender, static::$maleCharacters, static::$femaleCharacters);

        return static::randomElement($characters);
    }

    /**
     * @return string
     */
    public static function femaleCharacter()
    {
        return static::character(self::FEMALE_GENDER);
    }

    /**
     * @return string
     */
    public static function maleCharacter()
    {
        return static::character(self::MALE_GENDER);
    }

    /**
     * @param int|string<int>|null $count
     * @param bool $duplicates
     * @return array
     */
    public static function maleCharacters($count = self::DEFAULT_COUNT, $duplicates = true)
    {
        return static::characters(self::MALE_GENDER, $count, $duplicates);
    }

    /**
     * @param int|string<int>|null $count
     * @param bool $duplicates
     * @return array
     */
    public static function femaleCharacters($count = self::DEFAULT_COUNT, $duplicates = true)
    {
        return static::characters(self::FEMALE_GENDER, $count, $duplicates);
    }

    /**
     * @param string|null $gender
     * @param int|string<int>|null $count
     * @param bool $duplicates
     *
     * @return array<string>
     */
    public static function characters($gender = null, $count = self::DEFAULT_COUNT, $duplicates = false)
    {
        $characters = static::sortByGender($gender, static::$maleCharacters, static::$femaleCharacters);

        return static::generateMultiple($characters, $count, $duplicates);
    }
}
