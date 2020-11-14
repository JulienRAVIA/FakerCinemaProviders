<?php

namespace Xylis\FakerCinema\Provider;

use Xylis\FakerCinema\Provider\BaseProvider;

/**
 * @author Xylis <julien.ravia@gmail.com>
 * @package Xylis\FakerCinema
 */
class Person extends BaseProvider
{
    /** @var array */
    protected static $directorsM = array(
        'Martin Scorsese', 'Bong Joon-ho', 'Denis Villeneuve', 'Christopher Nolan', 'Jean-Luc Godard', 'Spike Jonze',
        'Francois Truffaut', 'Stanley Kubrick', 'Gus Van Sant', 'Quentin Tarantino', 'Guy Ritchie', 'Fritz Lang',
        'Pete Docter', 'Brad Bird', 'JJ Abrams', 'David Fincher', 'George Lucas', 'Steven Spielberg', 'Tim Burton',
        'Clint Eastwood', 'Michael Mann', 'John McTiernan', 'Guillermo Del Toro', 'Roman Polanski', 'Hayao Miyazaki',
        'Nicolas Winding Refn', 'David Lynch', 'Oliver Stone', 'Joel Coen', 'Zack Snyder', 'Francis Ford Coppola',
        'Edgar Wright', 'Alfred Hitchcock', 'Albert Dupontel', 'Pedro Almodovar', 'Sam Mendes', 'David O.Russel',
        'Michael Bay', 'Alex Garland', 'Darren Aronofsky', 'Danny Boyle', 'François Ozon', 'Andreï Tarkovski',
        'Steve McQueen', 'M.Night Shyamalan', 'James Wan', 'Wes Craven', 'Damien Chazelle', 'Billy Wilder',
        'Ingmar Bergman', 'Peter Jackson', 'Sergio Leone', 'Luis Buñuel', 'Howard Hawks', 'Brian de Palma',
        'Frank Capra', 'John Ford', 'David Lean', 'Sidney Lumet', 'Woody Allen', 'Buster Keaton', 'Charles Chaplin',
        'Federico Fellini', 'Michael Curtiz', 'Ethan Coen', 'Akira Kurosawa', 'Ridley Scott', 'James Cameron',
        'Luchino Visconti', 'Frank Darabont', 'Richard Linklater', 'Robert Zemeckis', 'Orson Welles', 'Milos Forman',
        'Jean-Pierre Melville', 'Asghar Farhadi', 'Jean Renoir', 'Robert Wise', 'Jonathan Demme', 'Terry Gilliam',
        'Spike Lee', 'Ang Lee', 'Wim Wenders', 'Henri-Georges Clouzot', 'Robert Altman', 'Wong Kar-Wai', 'Wes Anderson',
        'Park Chan-Wook', 'Paul Greengrass', 'Roberto Benigni', 'John Woo', 'Alain Resnais', 'Lars von Trier',
        'Jim Jarmush', 'Quentin Dupieux', 'Paul Thomas Anderson', 'Uwe Boll', 'John Sturges', 'Ken Loach',
        'Werner Herzog', 'Dario Argento', 'Gaspar Noé', 'Jacques Audiard', 'Michel Audiard', 'George Miller',
        'Xavier Dolan', 'Tony Scott', 'Paolo Sorrentino', 'Victor Fleming', 'Jordan Belfort'
    );

    /** @var array */
    protected static $directorsF = array(
        'Agnès Varda', 'Kathryn Bigelow', 'Greta Gerwig', 'Sofia Coppola', 'Agnès Jaoui', 'Nicole Garcia',
        'Jane Campion', 'Patty Jenkins', 'Claire Denis', 'Angelina Jolie', 'Danièle Thompson', 'Anne Fontaine',
        'Marry Harron', 'Celine Sciamma', 'Andrea Arnold', 'Ava DuVernay', 'Lulu Wang', 'Chloé Zhao', 'Lynne Ramsay',
        'Jennifer Kent', 'Kelly Reichardt', 'Lana Wachowski', 'Lilly Wachowski', 'Nadine Labaki', 'Marguerite Duras',
        'Penny Marshall', 'Lois Weber', 'Nancy Meyers', 'Barbra Streisand', 'Olivia Wilde'
    );

    /** @var array */
    protected static $actors = array(
        'Brad Pitt', 'Leonardo DiCaprio', 'Clint Eastwood', 'Tim Roth', 'Colin Farrel', 'Ryan Gosling', 'Harisson Ford',
        'Robert de Niro', 'Joe Pesci', 'Al Pacino', 'Steve Buscemi', 'Tom Hanks', 'Matthew McConaughey', 'Matt Damon',
        'Samuel L.Jackson', 'Joaquin Phoenix', 'Morgan Freeman', 'Colin Firth', 'Ben Affleck', 'Casey Affleck',
        'Michael Shannon', 'Tom Hardy', 'Christian Bale', 'Jean Dujardin', 'Liam Neeson', 'Adam Driver', 'John Goodman',
        'Michael Cera', 'Jonah Hill', 'Jack Nicholson', 'Adrien Brody', 'Tobey Maguire', 'Jesse Eisenberg',
        'Andy Serkis', 'Bradley Cooper', 'Armie Hammer', 'Timothée Chalamet', 'Clive Owen', 'Christoph Waltz',
        'Jamie Fox', 'Kurt Russel', 'Kenneth Branagh', 'Jake Gyllenhaal', 'Bryan Cranston', 'Ethan Hawke',
        'Michael Caine', 'Steve Carell', 'Jean Reno', 'Riz Ahmed', 'Sean Penn', 'Javier Bardem', 'Forest Whitaker',
        'Jared Leto', 'Tom Cruise', 'Hugh Jackman', 'Paul Dano', 'Andrew Garfield', 'Kevin Spacey', 'Jon Hamm',
        'Jon Bernthal', 'Michael Madsen', 'Johnny Depp', 'Harvey Keitel', 'Antonio Banderas', 'Ralph Fiennes',
        'Marlon Brando', 'Daniel Day-Lewis', 'Dustin Hoffman', 'Paul Newman', 'Robin Williams', 'James Stewart',
        'Robert Duvall', 'Jeff Bridges', 'Gene Hackman', 'Ben Kingsley', 'Philip Seymour Hoffman', 'Russell Crowe',
        'Henry Fonda', 'Kirk Douglas', 'John Wayne', 'Tommy Lee Jones', 'Christopher Walken', 'Ian McKellen',
        'Michael Douglas', 'Jeremy Irons', 'Heath Ledger', 'Benicio Del Toro', 'Gary Oldman', 'Mel Gibson',
        'Woody Allen', 'Steve McQueen', 'Robert Redford', 'James Dean', 'Gene Kelly', 'Bill Murray', 'Jim Carrey',
    );

    /** @var array */
    protected static $actresses = array(
        'Rosamund Pike', 'Margot Robbie', 'Uma Thurman', 'Jennifer Lawrence', 'Emily Blunt', 'Jodie Foster',
        'Olivia Colman', 'Amy Adams','Natalie Portman', 'Mila Kunis', 'Saoirse Ronan', 'Léa Seydoux', 'Monica Belluci',
        'Frances McDormand', 'Kate Winslet', 'Scarlett Johanson', 'Cate Blanchett', 'Juliane Moore', 'Brie Larson',
        'Charlize Theron', 'Florence Pugh', 'Emma Watson', 'Daryl Hannah', 'Ana de Armas', 'Naomi Watts', 'Emma Stone',
        'Tilda Swinton', 'Meryl Streep', 'Brigitte Bardot', 'Angelina Jolie', 'Marilyn Monroe', 'Mireille Darc',
        'Sharon Stone', 'Jennifer Aniston', 'Kristen Stewart', 'Keira Knightley', 'Catherine Deneuve', 'Nicole Kidman',
        'Jane Fonda', 'Marion Cotillard', 'Cameron Diaz', 'Isabelle Huppert', 'Rachel McAdams', 'Reese Witherspoon',
        'Rachel Weisz', 'Grace Kelly', 'Julia Roberts', 'Annie Girardot', 'Nathalie Baye', 'Jennifer Jason Leigh',
        'Shailene Woodley', 'Dakota Johnson', 'Sigourney Weaver', 'Helena Bonham Carter', 'Robin Wright', 'Eva Green',
        'Marlene Dietrich', 'Sandra Bullock','Anne Hathaway', 'Kim Novak', 'Ingrid Bergman', 'Mélanie Laurent',
        'Jennifer Connelly', 'Shelley Duvall', 'Mia Farrow', 'Alicia Vikander', 'Audrey Tautou', 'Carey Mulligan',
        'Anna Kendrick', 'Janet Leigh', 'Diane Keeton', 'Julia Louis-Dreyfus', 'Amanda Plummer', 'Felicity Jones',
        'Viola Davis', 'Carrie Fisher', 'Vera Farmiga', 'Elizabeth Olsen', 'Ellen Page', 'Rooney Mara', 'Kim Basinger',
        'Lauren Cohan', 'Kate Mara', 'Demi Moore', 'Michelle Pfeiffer', 'Maggie Gyllenhaal', 'Katheryn Winnick',
        'Octavia Spencer', 'Kirsten Dunst', 'Liv Tyler', 'Diane Keaton', 'Olivia Wilde', 'Gal Gadot', 'Jessica Alba'
    );

    /** @var array */
    protected static $cinematographers = array(
        'Robert Richardson', 'Roger Deakins', 'Caleb Deschanel', 'Rodrigo Prieto', 'Emmanuel Lubezki', 'Greig Fraser',
        'Hoyte van Hoytema', 'Christopher Doyle', 'Matthew Libatique', 'Bradford Young', 'Ben Richardson',
        'Chung-hoon Chung', 'Janusz Kamiński', 'Maryse Alberti', 'Vittorio Storaro', 'Wally Pfister', 'Darius Khondji',
        'Sayombhu Mukdeeprom', 'Edward Lachman', 'Robert Elswit', 'Bill Pope', 'Linus Sandgren', 'Claudio Miranda',
        'Jeff Cronenweth', 'Adam Arkapaw', 'Jody Lee Lipes', 'Mike Gioulakis', 'Robert D. Yeoman', 'Steven Soderbergh',
        'Bruno Delbonnel', 'Greg Toland', 'Robert Burks', 'Freddie Young', 'Sven Nykvist', 'Natasha Braier','Dick Pope',
        'Larry Smith', 'Newton Thomas Sigel', 'Gordon Willis', 'James Wong Howe', 'John Toll', 'Agnès Godard',
        'Rachel Morrison', 'Mark Lee Ping-Bing', 'Harris Savides', 'Ellen Kuras', 'Ed Lachman', 'Frederick Elmes',
        'Robby Müller', 'Kalyanee Mam', 'Eduardo Serra', 'Sean Bobbitt', 'Hélène Louvart', 'Luca Bigazzi',
        'Lukasz Zal', 'Mátyás Erdély', 'Charlotte Bruus Christensen', 'Mihai Malaimare Jr.', 'Larry Fong'
    );

    /** @var array */
    protected static $composers = array(
        'John Williams', 'Hans Zimmer', 'John Murphy', 'James Newton Howard', 'Cliff Martinez', 'Max Richter', 'M83',
        'Trent Reznor', 'Atticus Ross', 'Michael Giacchino', 'Abel Korzeniowski', 'Thomas Newman', 'Nino Rota',
        'John Barry', 'Ryuichi Sakamoto', 'Rachel Portman', 'Ennio Morricone','Alexandre Desplat','Dario Marianelli',
        'Maurice Jarre', 'Joe Hisaishi', 'Michel Legrand', 'Danny Elfman', 'Alan Silvestri', 'Vangelis', 'Le Matos',
        'Gabriel Yared', 'Yann Tiersen', 'Randy Newman', 'Howard Shore', 'James Horner', 'Philip Glass', 'Eric Serra',
        'Bernard Herrmann', 'Harry Gregson-Williams', 'Marco Beltrami', 'Johan Johansson', 'Dan Levy', 'Kyle Dixon',
        'Ramin Djawadi', 'Jeff Russo', 'Carter Burwell', 'Daniel Pemberton', 'Imbrahim Maalouf', 'Junkie XL',
        'Christophe Julien', 'John Carpenter', 'Roque Banos', 'Benjamin Wallfisch', 'Lorne Balfe', 'Ben Salisbury',
        'Geoff Barrow', 'Justin Hurwitz', 'Fernando Velasquez', 'Jim Williams', 'Thom Yorke', 'Jerry Goldsmith',
        'Trevor Rabin', 'Trevor Jones', 'Randy Edelman', 'Vladimir Cosma', 'Alberto Iglesias', 'Clint Mansell',
        'Craig Armstrong', 'Ludovico Einaudi', 'Hildur Guðnadóttir', 'Nicholas Britelll', 'Steven Price', 'Nick Cave',
        'David Arnold', 'Michael Price', 'David Wingo', 'John Powell', 'Brian Tyler', 'Dan Romer', 'Daft Punk',
        'Warren Ellis', 'Steve Jablonsky', 'Tyler Bates', 'Henry Jackman', 'Matthew Margeson', 'Ludwig Goransson',
    );

    /**
     * @param string|null $gender
     * @return string
     */
    public static function director($gender = null)
    {
        $directors = static::sortByGender($gender, static::$directorsM, static::$directorsF);

        return static::randomElement($directors);
    }

    /**
     * @return string
     */
    public static function femaleDirector()
    {
        return static::director(self::FEMALE_GENDER);
    }

    /**
     * @return string
     */
    public static function maleDirector()
    {
        return static::director(self::MALE_GENDER);
    }

    /**
     * @param string|null $gender
     * @return string
     */
    public static function actor($gender = null)
    {
        $actors = static::sortByGender($gender, static::$actors, static::$actresses);

        return static::randomElement($actors);
    }

    /**
     * @return string
     */
    public static function femaleActor()
    {
        return static::actor(self::FEMALE_GENDER);
    }

    /**
     * @return string
     */
    public static function maleActor()
    {
        return static::actor(self::MALE_GENDER);
    }

    /**
     * @return string
     */
    public static function cinematographer()
    {
        return static::randomElement(static::$cinematographers);
    }

    /**
     * @return string
     */
    public static function composer()
    {
        return static::randomElement(static::$composers);
    }

    /**
     * @param string|null $gender
     * @param int|string<int>|null $count
     * @param bool $duplicates
     * @return array<string>
     */
    public static function directors($gender = null, $count = self::DEFAULT_COUNT, $duplicates = false)
    {
        $directors = static::sortByGender($gender, static::$directorsM, static::$directorsF);

        return static::generateMultiple($directors, $count, $duplicates);
    }

    /**
     * @param int|string<int>|null $count
     * @param bool $duplicates
     * @return array<string>
     */
    public static function femaleDirectors($count = self::DEFAULT_COUNT, $duplicates = false)
    {
        return static::directors(self::FEMALE_GENDER, $count, $duplicates);
    }

    /**
     * @param int|string<int>|null $count
     * @param bool $duplicates
     * @return array<string>
     */
    public static function maleDirectors($count = self::DEFAULT_COUNT, $duplicates = false)
    {
        return static::directors(self::MALE_GENDER, $count, $duplicates);
    }

    /**
     * @param int|string<int>|null $count
     * @param bool $duplicates
     * @return array<string>
     */
    public static function composers($count = self::DEFAULT_COUNT, $duplicates = false)
    {
        return static::generateMultiple(static::$composers, $count, $duplicates);
    }

    /**
     * @param int|string<int>|null $count
     * @param bool $duplicates
     * @return array<string>
     */
    public static function cinematographers($count = self::DEFAULT_COUNT, $duplicates = false)
    {
        return static::generateMultiple(static::$cinematographers, $count, $duplicates);
    }

    /**
     * @param string|null $gender
     * @param int|string<int>|null $count
     * @param bool $duplicates
     * @return array<string>
     */
    public static function actors($gender = null, $count = self::DEFAULT_COUNT, $duplicates = false)
    {
        $actors = static::sortByGender($gender, static::$actors, static::$actresses);

        return static::generateMultiple($actors, $count, $duplicates);
    }

    /**
     * @param int|string<int>|null $count
     * @param bool $duplicates
     * @return array
     */
    public static function maleActors($count = self::DEFAULT_COUNT, $duplicates = false)
    {
        return static::actors(self::MALE_GENDER, $count, $duplicates);
    }

    /**
     * @param int|string<int>|null $count
     * @param bool $duplicates
     * @return array
     */
    public static function femaleActors($count = self::DEFAULT_COUNT, $duplicates = false)
    {
        return static::actors(self::FEMALE_GENDER, $count, $duplicates);
    }

    /**
     * @param string $gender
     * @return string|null
     */
    public static function person($gender = null)
    {
        $personsM = array_merge(self::$actors, self::$directorsM);
        $personsF = array_merge(self::$actresses, self::$directorsM);

        $persons = static::sortByGender($gender, $personsM, $personsF);
        $persons = array_merge($persons, self::$cinematographers, self::$composers);

        return static::randomElement($persons);
    }

    /**
     * @return string
     */
    public static function malePerson()
    {
        return static::person(self::MALE_GENDER);
    }

    /**
     * @return string
     */
    public static function femalePerson()
    {
        return static::person(self::FEMALE_GENDER);
    }

    /**
     * @param string $gender
     * @param int $count
     * @param bool $duplicates
     * @return array
     */
    public static function persons($gender = null, $count = self::DEFAULT_COUNT, $duplicates = false)
    {
        $personsM = array_merge(self::$actors, self::$directorsM);
        $personsF = array_merge(self::$actresses, self::$directorsM);

        $persons = static::sortByGender($gender, $personsM, $personsF);
        if ($gender === null) {
            $persons = array_merge($persons, self::$cinematographers, self::$composers);
        }

        return static::generateMultiple($persons, $count, $duplicates);
    }

    /**
     * @param int $count
     * @param bool $duplicates
     * @return array
     */
    public static function malePersons($count = self::DEFAULT_COUNT, $duplicates = false)
    {
        return static::persons(self::MALE_GENDER, $count, $duplicates);
    }

    /**
     * @param int $count
     * @param bool $duplicates
     * @return array
     */
    public static function femalePersons($count = self::DEFAULT_COUNT, $duplicates = false)
    {
        return static::actors(self::MALE_GENDER, $count, $duplicates);
    }
}
