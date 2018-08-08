<?php

namespace Faker\Provider;

class BuildingData
{
    public static function getBuildings(string $type = null): array
    {
        switch ($type) {
            case 'airports':
                return self::getAirports();
            case 'hospitals':
                return self::getHospitals();
            case 'hotels':
                return self::getHotels();
            case 'mosques':
                return self::getMosques();
            case 'museums':
                return self::getMuseums();
            case 'proposed':
                return self::getProposedBuildings();
            case 'resorts':
                return self::getResorts();
            case 'restaurants':
                return self::getRestaurants();
            case 'shopping malls':
                return self::getShoppingMalls();
            case 'skyscrapers':
                return self::getSkyscrapers();
            case 'sport venues':
                return self::getSportVenues();
            case 'under construction':
                return self::getBuildingsUnderConstruction();
            default:
                return array_unique(
                    array_merge(
                        self::getAirports(),
                        self::getBuildingsUnderConstruction(),
                        self::getHospitals(),
                        self::getHotels(),
                        self::getMosques(),
                        self::getMuseums(),
                        self::getProposedBuildings(),
                        self::getResorts(),
                        self::getRestaurants(),
                        self::getShoppingMalls(),
                        self::getSkyscrapers(),
                        self::getSportVenues()
                    ));
        }
    }

    public static function getFloors(): array
    {
        return static::$floors;
    }

    public static function getSections(): array
    {
        return static::$sections;
    }

    public static function getStreets(): array
    {
        return static::$streets;
    }

    public static function getAirports(): array
    {
        return static::$airports;
    }

    public static function getHotels(): array
    {
        return array_unique(array_merge(static::$hotels, static::$skyscraperHotels));
    }

    public static function getHospitals(): array
    {
        return static::$hospitals;
    }

    public static function getMosques(): array
    {
        return static::$mosques;
    }

    public static function getMuseums(): array
    {
        return static::$museums;
    }

    public static function getResorts(): array
    {
        return static::$resorts;
    }

    public static function getRestaurants(): array
    {
        return static::$restaurants;
    }

    public static function getShoppingMalls(): array
    {
        return static::$shoppingMalls;
    }

    public static function getSkyscrapers(): array
    {
        return array_unique(array_merge(static::$skyscrapers, static::$skyscraperHotels, static::$residentialSykscrapers));
    }

    public static function getSportVenues(): array
    {
        return static::$sportVenues;
    }

    public static function getBuildingsUnderConstruction(): array
    {
        return static::$underConstruction;
    }

    public static function getProposedBuildings(): array
    {
        return static::$proposedBuildings;
    }

    public static $floors = [
        'Ground Floor',
        'First Floor',
        'Second Floor',
        'Third Floor',
        'Fourth Floor',
        'Fifth Floor',
        'Top Floor',
    ];

    public static $sections = [
        'Main Entrance',
        'Main Dining Area',
        'Reception',
        'Lobby',
    ];

    public static $streets = [
        '2nd December St',
        'Al Ain Rd',
        'Al Hadiqa, Meydan Rd',
        'Al Hudaiba St',
        'Al Ittihad Rd',
        'Al Khail Rd',
        'Al Nasr Square',
        'Al Wasl Rd',
        'Dubai-Sharjah Highway',
        'Emirates Rd',
        'Hajar Rd, 315 Rd',
        'Hatta Rd',
        'Jumeira Rd',
        'Jumeirah Beach Rd',
        'Khalid Bin Al Waleed Rd',
        'Sheikh Khalifa Bin Zayed St',
        'Sheikh Mohammed Bin Zayed Rd',
        'Sheikh Zayed Rd',
        'was Al Sufouh Rd',
    ];

    protected static $airports = [
        'Dubai International Airport'
    ];

    protected static $hotels = [
        'Address Boulevard',
        'Conrad Dubai',
        'Grand Hyatt Dubai',
        'Gucci Hotel',
        'Hatta Fort Hotel',
        'Hilton Dubai Creek',
        'Hyatt Regency Dubai',
        'Iranian Club, Dubai',
        'Jumeirah Beach Hotel',
        'Jumeirah Zabeel Saray',
        'Kempinski Hotel Mall of the Emirates',
        'Movenpick Hotel Dubai',
        'Palazzo Versace Dubai',
        'Raffles Dubai',
        'Royal Amwaj Resort and Spa',
        'The Address Downtown Dubai',
        'The Fairmont Palm Hotel & Resort',
        //skyscrapers
        'Angsana Hotel & Suites',
        'Atlantis, The Palm',
        'Burj Al Arab',
        'Burj Khalifa',
        'Emirates Towers',
        'Four Points by Sheraton, Dubai',
        'Grosvenor House Dubai',
        'Jumeirah Emirates Towers Hotel',
        'JW Marriott Marquis Dubai',
        'Marina 101',
        'Radisson Royal Dubai',
        'Rose Rayhaan by Rotana',
        'Shangri-La Hotel',
    ];

    protected static $hospitals = [
        'Al Jalila Children\'s Specialty Hospital',
        'Dubai Hospital',
        'Iranian Hospital, Dubai',
        'Rashid Hospital',
        'Latifa Hospital',
    ];

    protected static $mosques = [
        'Al Farooq Omar Bin Al Khattab Mosque',
        'Grand Mosque Dubai',
        'Iranian Mosque, Bur Dubai',
        'Iranian Mosque, Satwa',
        'Jumeirah Mosque',
        'Al-Rahim Mosque',
    ];

    protected static $museums = [
        'Al Ahmadiya School',
        'Dubai Moving Image Museum',
        'Dubai Museum',
        'Etihad Museum',
        'Museum of the Future Dubai',
        'Saeed Al Maktoum House',
        'Salsali Private Museum',
        'Sheikh Obaid bin Thani House',
    ];

    protected static $resorts = [
        'Atlantis, The Palm',
        'Country Spa',
        'Deira Island',
        'Dubai Parks and Resorts',
        'Jumeirah Zabeel Saray',
        'Madinat Jumeirah',
        'Palm Grandeur',
        'Palm Islands',
        'Palm Jebel Ali',
        'Royal Amwaj Resort and Spa',
        'Ski Dubai',
    ];

    protected static $restaurants = [
        'Iranian Club, Dubai',
        'Mirchi',
        'Verre',
    ];

    protected static $shoppingMalls          = [
        'Arabian Center',
        'BurJuman',
        'City Center Me\'aisem',
        'City Centre Deira',
        'City Centre Mirdif',
        'Dubai Festival City',
        'Dubai Outlet Mall',
        'Mall Ibn Battuta',
        'Mall of Arabia (Dubai)',
        'Mall of the Emirates',
        'Mall of the World',
        'Mercato Shopping Mall',
        'Mohammed bin Rashid City',
        'The Dubai Mall',
        'The Walk (Jumeirah Beach Residence)',
        'Wafi City',
    ];
    protected static $skyscrapers            = [
        '1 Park Avenue',
        'AAM Tower',
        'The Address the BLVD',
        'AG Tower',
        'Ahmed Abdul Rahim Al Attar Tower',
        'Al Attar Business Tower',
        'Al Hekma Tower',
        'Al Kazim Towers',
        'Al Salam Tecom Tower',
        'Al Wasl Tower',
        'Al Yaqoub Tower',
        'Almas Tower',
        'Anara Tower',
        'Armada Towers',
        'Bay Central',
        'Bin Manana Twin Towers',
        'The Binary (Dubai)',
        'Boulevard Plaza',
        'Rosewood Dubai',
        'Burj Al Arab',
        'Burj Al Salam',
        'Burj Khalifa',
        'Burj Park III',
        'Burj 2020',
        'Chelsea Tower',
        'Concorde Tower',
        'Deira Twin Towers',
        'DIFC Tower',
        'Downtown Dubai',
        'Dream Tower, Dubai',
        'Dubai Beachfront Hotel',
        'Dubai City Tower',
        'Dubai Islamic Bank Tower',
        'Dubai Marriott Harbour Hotel & Suites',
        'Dubai Meydan City',
        'Dubai Mixed-Use Towers',
        'Dubai One Tower',
        'Dubai Pearl',
        'Dubai Towers Dubai',
        'Dubai World Trade Centre',
        'Duja Tower',
        'Emirates Office Tower',
        'Emirates Towers',
        'Entisar Tower',
        'EP 07 Tower',
        'EP 09 Towers',
        'Escan Tower',
        'Etisalat Tower 1',
        'The Exchange (Dubai)',
        'Executive Towers',
        'Fortune Araames',
        'Forte',
        'The Forum (Dubai)',
        'Four Points by Sheraton Sheikh Zayed Road Dubai',
        'The Grand Boulevard Tower',
        'HHHR Tower',
        'ICD Brookfield',
        'I-Rise',
        'The Index (Dubai)',
        'Il Primo',
        'Iris Bay (Dubai)',
        'IRIS Mist',
        'JB Tower',
        'Jumeirah Al Khor',
        'Jumeirah Bay',
        'Jumeirah Beach Residence',
        'Jumeirah Business Center 1',
        'Jumeirah Business Center Towers',
        'JW Marriott Marquis Dubai',
        'Khalid Al Attar Tower 2',
        'Lake Shore Towers',
        'La Maison by HDS',
        'Lighthouse Tower',
        'LIWA Heights',
        'The Mansion at Burj Khalifa',
        'Marina 106',
        'Marina Arcade',
        'Marina Promenade',
        'MarinaScape',
        'Mazaya Business Avenue',
        'Meraas Tower',
        'Nakheel Tower',
        'National Bank of Dubai (building)',
        'Nili Tower',
        'O-14 (Dubai)',
        'O2 Residence',
        'The Oberoi Business Bay',
        'The One Tower',
        'One Zabeel',
        'Orra Marina',
        'The Palladium (Dubai)',
        'Park Lane Tower (Dubai)',
        'Park Place (Dubai)',
        'The Peninsula (Dubai)',
        'Pier 8',
        'The Palm Tower',
        'The Palm Gateway',
        'The Residences',
        'Rolex Tower',
        'Rose Rayhaan by Rotana',
        'Saba Tower 1',
        'Saba Tower 4',
        'Shangri-La Hotel (Dubai)',
        'The Sheffield Tower',
        'Signature Towers',
        'Sky Gardens',
        'The Skyscraper (Dubai)',
        'Starhill Tower',
        'Tiara United Towers',
        'The Tower (Dubai)',
        'The Tower at Dubai Creek Harbour',
        'V3 Tower',
        'Vida Residence Downtown Dubai',
        'Vida Zabeel',
        'Verde Residences and Offices',
        'Vision Tower',
        'Vue De Lac',
        'The Wave Tower',
        'World Trade Centre Residence',
    ];
    protected static $skyscraperHotels       = [
        'Angsana Hotel & Suites',
        'Atlantis, The Palm',
        'Burj Al Arab',
        'Burj Khalifa',
        'Emirates Towers',
        'Four Points by Sheraton Sheikh Zayed Road Dubai',
        'Grand Fort Hotel[6]',
        'Grosvenor House (Dubai)',
        'Jumeirah Emirates Towers Hotel',
        'JW Marriott Marquis Dubai',
        'Marina 101',
        'Paramount Tower Hotel & Residence',
        'The Palm Tower',
        'Rose Rayhaan by Rotana',
        'Shangri-La Hotel (Dubai)',
        'Tamani Hotel Marina',
        'Trump International Hotel & Tower (Dubai)',

    ];
    protected static $residentialSykscrapers = [
        '23 Marina',
        '21st Century Tower',
        '23 Marina',
        'The Address Downtown Dubai',
        'Al Fattan Marine Towers',
        'Al Rostamani Maze Tower',
        'Al Seef Towers',
        'Al Tayer Tower',
        'Angsana Hotel & Suites',
        'Burj Khalifa',
        'Cayan Tower',
        'Central Park Towers',
        'D1 (building)',
        'DAMAC Residenze',
        'DAMAC Maison-Paramount Tower 1',
        'DAMAC Maison-Paramount Tower 2',
        'DAMAC Maison-Paramount Tower 3',
        'DAMAC Paramount Hotel & Residences',
        'Dubai One Tower',
        'Elite Residence',
        'Elite Towers',
        'Emirates Crown',
        'Grosvenor House (Dubai)',
        'La Maison by HDS',
        'Marina 1',
        'Marina 101',
        'Marina Pinnacle',
        'The Marina Torch',
        'Millennium Tower (Dubai)',
        'Moving skyscraper',
        'Ocean Heights (Dubai)',
        'Pentominium',
        'Princess Tower',
        'Sama Tower',
        'Sulafa Tower',
        'Tamani Hotel Marina',
        'The Tower at Dubai Creek Harbour',
        'Ubora Towers',
        'Verde Residences and Offices',
    ];

    protected static $sportVenues = [
        'Aviation Club Tennis Centre',
        'DSC Hockey Stadium',
        'DSC Indoor Arena',
        'DSC Multi-Purpose Stadium',
        'Dubai Autodrome',
        'Dubai Cricket Council Ground No 1',
        'Dubai Cricket Council Ground No 2',
        'Dubai Exiles Rugby Ground',
        'Dubai International Cricket Stadium',
        'Emirates Golf Club',
        'Hamdan Sports Complex',
        'ICC Academy Ground',
        'Iranian Club, Dubai',
        'Jumeirah Golf Estates',
        'Al-Maktoum Stadium',
        'Maktoum Bin Rashid Al Maktoum Stadium',
        'Meydan Racecourse',
        'Police Officers Club Stadium',
        'Al-Rashid Stadium',
        'The Sevens Stadium',
        'Zabeel Stadium',
    ];

    protected static $underConstruction = [
        'Al Habtoor City',
        'Al Hekma Tower',
        'Al safa residential development',
        'Al Maktoum International Airport',
        'Arabian Canal',
        'Bay Central',
        'Bayside Residence',
        'The Binary (Dubai)',
        'Bluewaters Island',
        'Rosewood Dubai',
        'Burj Al Salam',
        'DAMAC Maison-Paramount Tower 1',
        'DAMAC Maison-Paramount Tower 2',
        'DAMAC Maison-Paramount Tower 3',
        'DAMAC Paramount Hotel & Residences',
        'Downtown Dubai',
        'Dubai Central Library',
        'Dubai Harbour',
        'Dubai Industrial Park',
        'Dubai Islamic Bank Tower',
        'Dubai Maritime City',
        'Dubai Meydan City',
        'Dubai Outlet City',
        'Dubai TechnoPark',
        'Dubai Waterfront',
        'Duja Tower',
        'Elite Towers',
        'Emirates Financial Towers',
        'The Exchange (Dubai)',
        'F1-X Dubai',
        'The Forum (Dubai)',
        'IMG Worlds of Adventure',
        'Iris Bay (Dubai)',
        'Jumeirah Al Khor',
        'Jumeirah Garden City',
        'The Mansion at Burj Khalifa',
        'Marina 101',
        'Marina 106',
        'Mazaya Business Avenue',
        'Mohammad bin Rashid Gardens',
        'Nakheel Mall',
        'O2 Residence',
        'The Oberoi Business Bay',
        'One Zabeel',
        'OQYANA World First',
        'Orra Marina',
        'Palm Islands',
        'Palm Jebel Ali',
        'Park Lane Tower (Dubai)',
        'The Peninsula (Dubai)',
        'Pentominium',
        'Pier 8',
        'Porto Dubai',
        'Vida Residence Downtown Dubai',
        'Vida Zabeel',
    ];

    protected static $proposedBuildings = [
        '1 Park Avenue',
        'Al wasl development',
        'Aladdin City, Dubai',
        'Bawadi',
        'Burj Al Fattan',
        'Burj al-Taqa',
        'Burj Park III',
        'Culture Village',
        'DAMAC Residenze',
        'Deira Island',
        'DIFC Tower',
        'Dubai Beachfront Hotel',
        'Dubai Central Library',
        'Dubai City Tower',
        'Dubai Creek Cultural Project',
        'Dubai Food City',
        'Dubai Golf City',
        'Dubai Studio City',
        'Elite Towers',
        'Entisar Tower',
        'EP 07 Tower',
        'Falconcity of Wonders',
        'Flamingo creek',
        'The Grand Boulevard Tower',
        'Hydropolis – a proposed hotel',
        'JB Tower',
        'Jebel Ali Seaplane Base',
        'Jumeirah Business Center 1',
        'Jumeirah Business Center Towers',
        'Mall of Arabia (Dubai)',
        'Marina Arcade',
        'Nili Tower',
        'OQYANA World First',
        'P-17 (Dubai)',
        'Paramount theme park Dubai',
        'Pentominium',
        'Saadiyat Island',
        'The Needle',
        'The Sheffield Tower',
        'Signature Towers',
        'Verde Residences and Offices',
        'The Wave Tower',
        'The World (archipelago)',
        'Ziggurat Pyramid, Dubai',
    ];
}