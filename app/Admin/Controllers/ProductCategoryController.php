<?php

namespace App\Admin\Controllers;

use App\Common\GlobalConfiguration;
use App\Models\ArticleCategory;
use App\Models\ProductCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Encore\Admin\Traits\ModelTree;

class ProductCategoryController extends AdminController
{

    protected $title = '产品类目';
    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProductCategory());

        $form->select('map_id')->options(ProductCategory::$productMap)->required();
        $form->text('name')->rules('required');
        $form->switch('is_show');
        $form->number('sort')->default(ProductCategory::count() + 1);
        return $form;
    }

    protected function grid()
    {
        $grid = new Grid(new ProductCategory());

        $grid->filter(function ($filter){
            $filter->disableIdFilter();
            $filter->equal('map_id')->select(ProductCategory::$productMap);
        });


        $grid->model()->orderByDesc('sort');
        $grid->column('id', __('Id'));
        $grid->column('map_id', __('mapId'))->editable('select', ProductCategory::$productMap);
        $grid->column('name', __('Name'));
        $states = [
            'on' => ['value' => 1, 'text' => '显示'],
            'off' => ['value' => 0, 'text' => '不显示'],
        ];
        $grid->column('is_show', __('Is show'))->switch($states);
        $grid->column('sort', __('Sort'))->editable();
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(ArticleCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('is_show', __('Is show'));
        $show->field('sort', __('Sort'));

        return $show;
    }
}
