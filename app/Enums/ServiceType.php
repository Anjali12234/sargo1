<?php

namespace App\Enums;

enum ServiceType : string
{
    case Safe_Painting_Service = 'safe_painting_service';
    case Waterproofing_Solutions = 'waterproofing_solutions';
    case Beautiful_Homes = 'beautiful_homes';

    public function label(): string
    {
        return self::getLabel($this);
    }  

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::Safe_Painting_Service => 'Safe Painting Service',
            self::Waterproofing_Solutions => 'Waterproofing Solutions',
            self::Beautiful_Homes => 'Beautiful Homes',
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