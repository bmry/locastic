<?php

namespace App\DBAL;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

abstract class EnumType extends Type
{
    protected $name;
    protected static $values = [];

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $values = array_map(function ($val) {
            return "'" . $val . "'";
        }, static::$values);

        return 'ENUM(' . implode(', ', $values) . ')';
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return $value;
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {

        if ($value && !in_array($value, static::$values)) {
            throw new \InvalidArgumentException("Invalid '" . $this->name . "' value. Value: {$value}");
        }

        return $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }

    public static function getValues(): array
    {
        return static::$values;
    }

    /**
     * @return array
     */
    public static function getAvailableValues(): array
    {
        $availableValues = array();
        foreach (static::$values as $value) {
            $key = 'admin.enum.label.'.$value;
            $availableValues[$key] = $value;
        }

        return $availableValues;
    }

    /**
     * This is used when you need the key and value of a ChoiceType to both be the values of your enum values
     * @return array
     */
    public static function getValuesAsChoiceArray(): array
    {
        $availableValues = array();
        foreach (static::$values as $value) {
            $availableValues[$value] = $value;
        }

        return $availableValues;
    }
}
