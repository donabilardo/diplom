<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use Arrilot\Widgets\AbstractWidget;

class CategoriesWidget extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $count = Category::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-categories',
            'title' => 'Счетчик категорий',
            'text' => "Количество категорий: $count",
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
