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

        $form->select('map_id', __('map_id'))->options(ProductCategory::$productMap)->rules('required');
        $form->text('name', __('name'))->rules('required|max:80');
        $form->switch('is_show', __('is_show'));
        $form->number('sort', __('sort'))->default(ProductCategory::count() + 1)->rules('required');
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
        $grid->column('id', __('id'));
        $grid->column('map_id', __('map_id'))->editable('select', ProductCategory::$productMap);
        $grid->column('name', __('name'));
        $states = [
            'on' => ['value' => 1, 'text' => '显示'],
            'off' => ['value' => 0, 'text' => '不显示'],
        ];
        $grid->column('is_show', __('is_show'))->switch($states);
        $grid->column('sort', __('sort'))->editable();
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(ProductCategory::findOrFail($id));

        $show->field('id', __('id'));
        $show->field('name', __('name'));
        $show->field('created_at', __('created_at'));
        $show->field('updated_at', __('updated_at'));
        $show->field('is_show', __('is_show'));
        $show->field('sort', __('sort'));

        return $show;
    }
}
