<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\AvnaledSEO;
use App\Admin\Forms\GlobalSetting;
use App\Admin\Forms\PokSEO;
use App\Http\Controllers\Controller;
use Encore\Admin\Form;
use Encore\Admin\Layout\Content;
use Encore\Admin\Widgets\Tab;

class ConfigController extends Controller
{

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function index(Content $content)
    {
        $forms = [
            'avnaledSEO' => AvnaledSEO::class,
            'pokSEO' => PokSEO::class,
            'globalSetting' => GlobalSetting::class
        ];

        $content->title('设置')->body(Tab::forms($forms));

        return $content;
    }
}
