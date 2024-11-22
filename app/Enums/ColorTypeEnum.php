<?php

namespace App\Enums;

enum ColorTypeEnum:string
{
    case All = 'all';
    case RED_AND_ORANGES  = 'red and oranges';
    case YELLOW_AND_GREENS  = 'yello and greens';
    case TEALS_AND_BLUES  = 'teals blues';
    case  PURPLES_AND_PINKS = 'purples and pinks';
    case  COOL_NEUTRALS = 'cool neutrals';
    case  WARM_NEUTRALS = 'warm neutrals';
    case  WHITES = 'whites';

    public function label(): string
    {
        return self::getLabel($this);
    }  

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::All => 'All',
            self::RED_AND_ORANGES => 'Red And Oranges',
            self::YELLOW_AND_GREENS => 'Yellow And Greens',
            self::TEALS_AND_BLUES => 'Teals And Bules',
            self::PURPLES_AND_PINKS => 'Purples And Pinks',
            self::COOL_NEUTRALS => 'Cool Neutrals',
            self::WARM_NEUTRALS => 'Warm Neutrals',
            self::WHITES => 'Whites',
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
