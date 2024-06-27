<?php

namespace App\Admin\Widgets;

use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;

class ProductsWidget extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $count = Product::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-bread',
            'title' => 'Счетчик товара',
            'text' => "Количество товара: $count",
            'button' => [
                'text' => 'Перейти к списку',
                'link' => '',
            ],
            'image' => ''
        ]));
    }

    public function shouldBeDisplayed(): bool
    {
        return true;
    }
}
