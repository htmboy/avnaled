<?php

namespace App\Admin\Controllers;

use App\Models\Carousel;
use App\Models\ProductCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use function foo\func;

class CarouselController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '轮播图';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Carousel());
        $grid->model()->orderBy('sort', 'desc');
        $grid->column('id');
        $grid->column('title');
        $grid->column('site')->image('/storage');
        $grid->column('link')->link();
        $grid->column('created_at')->date('Y-m-d');
        $grid->column('updated_at')->date('Y-m-d');
        $states = [
            'on' => ['value' => 1, 'text' => '显示'],
            'off' => ['value' => 0, 'text' => '不显示'],
            ];
        $grid->column('is_show')->switch($states);
        $grid->column('sort')->editable();

        $grid->actions(function ($actions) {
            $actions->disableView();
        });

        return $grid;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Carousel());

        $form->text('title');
        $form->text('alt');
        $form->image('site');
        $form->url('link');
        $form->switch('is_show');
        $form->number('sort');

        return $form;
    }
}