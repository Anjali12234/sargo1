<?php

namespace App\Enums;

enum SliderTypeEnum:string
{
    case Category = 'category';
    case WhyChooseUs = 'why_choose_us';
    case ContactUs = 'contact_us';
    case Index = 'index';
    case Product = 'product';

    public function label(): string
    {
        return self::getLabel($this);
    }  

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::WhyChooseUs => 'WhyChooseUs',
            self::Category => 'Category',
            self::ContactUs => 'ContactUs',
            self::Index => 'Index',
            self::Product => 'Product',
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
