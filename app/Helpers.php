<?php

namespace App;

use App\Models\Menu;

class Helpers
{
    public static function getFrontUrl(Menu $menu, ?string $language = 'ne'): string
    {
        $menu->load('model');
        if ($menu->children_count > 0) {
            return "#";
        } else {

            if (!empty($menu->model)) {

                return match ($menu->type) {
                    'category' => route('category', [$menu->model->slug]),
                    'productCategory' => route('productCategory', [$menu->model->slug]),
                };
            } else {
                return route('static', [$menu->slug]);
            }
        }
    }


    function repeatCharacter($times, $character = "-")
    {
        $result = '';

        for ($i = 0; $i < $times; $i++) {
            $result .= $character;
        }

        return $result;
    }
}
