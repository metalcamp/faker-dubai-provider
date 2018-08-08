<?php

namespace Faker\Provider;

use Faker\Generator;

class FakeBuilding extends \Faker\Provider\Base
{
    /**
     * @param \Faker\Generator $generator
     */
    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
    }

    /**
     * @param string|null $type
     *
     * @return string
     */
    public static function building(string $type = null): string
    {
        $building = static::randomElement(BuildingData::getBuildings($type));
        $street = static::randomElement(BuildingData::getStreets());

        return $building . ',' . $street;
    }

    /**
     * @param string|null $type
     *
     * @return string
     */
    public static function buildingName(string $type = null): string
    {
        return static::randomElement(BuildingData::getBuildings($type));
    }

    /**
     * @return string
     */
    public static function buildingStreet(): string
    {
        return static::randomElement(BuildingData::getStreets());
    }

    /**
     * @return string
     */
    public static function buildingFloor(): string
    {
        return static::randomElement(BuildingData::getStreets());
    }

    /**
     * @param string|null $type
     *
     * @return array
     */
    public static function buildingArray(string $type = null): array
    {
        return [
            'name'    => static::randomElement(BuildingData::getBuildings($type)),
            'street'  => static::randomElement(BuildingData::getStreets()),
            'floor'   => static::randomElement(BuildingData::getFloors()),
            'section' => static::randomElement(BuildingData::getSections()),
        ];
    }
}