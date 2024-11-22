<?php

namespace App\Enums;

enum ProductCategoryEnum : string
{
    case Interior_Wall_Paints = 'interior_wall_paints';
    case Exterior_Wall_Paints  = 'exterior_wall_paints';
    case Metal_Wood_Finishes  = 'metal_wood_finishes';
    case Waterproofing  = 'waterproofing';

    public function label(): string
    {
        return self::getLabel($this);
    }  

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::Interior_Wall_Paints => 'Interior Wall Paints',
            self::Exterior_Wall_Paints => 'Exterior Wall Paints',
            self::Metal_Wood_Finishes => 'Metal Wood Finishes',
            self::Waterproofing => 'Waterproofing',
        };
    }

    public static function getValuesWithLabels(): array
    {
        $valuesWithLabels = [];

        foreach (self::cases() as $value) {
            $valuesWithLabels[] = [
                'value' => $value,
                'label' => $value->label(),
            ];
        }

        return $valuesWithLabels;
    }
}
