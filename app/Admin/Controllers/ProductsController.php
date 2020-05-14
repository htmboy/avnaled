<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '产品';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());
        $grid->model()->orderByDesc('sort');
        $grid->column('id');
        $grid->category()->name();
        $grid->column('title');
        $grid->column('thumbnail')->image('/storage', 80);
        $grid->column('updated_at')->date('Y-m-d');
        $states = [
            'on' => ['value' => 1, 'text' => '显示'],
            'off' => ['value' => 0, 'text' => '不显示'],
        ];
        $grid->column('is_show')->switch($states);
        $grid->column('sort')->editable();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));
        $show->field('cat_id');
        $show->field('seo_title');
        $show->field('seo_keywords');
        $show->field('seo_description');
        $show->field('title');
        $show->field('thumbnail');
        $show->field('number');
        $show->field('watts');
        $show->field('size');
        $show->field('color');
        $show->field('package');
        $show->field('weight');
        $show->field('voltage');
        $show->field('angle');
        $show->field('waterproof');
        $show->field('life');
        $show->field('distance');
        $show->field('material');
        $show->field('characteristic');
        $show->field('content');
        $show->field('created_at');
        $show->field('updated_at');
        $show->field('is_show');
        $show->field('sort');
        $show->field('cat_sort');
        $show->gallery('产品图片', function ($gallery) {
            $gallery->resource('/admin/product-galleries');
            $gallery->id();
            $gallery->gallery()->image();
            $gallery->is_show();
            $gallery->sort();
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());
        $form->column(1/2, function ($form) {
            $form->select('cat_id')->options(ProductCategory::getChildCategory(['id', 'name'])->keyBy('id')->map(function ($item){
                return $item->name;
            }));
            $form->text('seo_title', __('Seo title'));
            $form->text('seo_keywords');
            $form->text('seo_description');
            $form->text('title');
            $form->image('thumbnail');


        });

        $form->column(1/2, function ($form) {
            $form->text('number');
            $form->text('watts');
            $form->text('size');
            $form->text('color', __('Color'));
            $form->text('package', __('Package'));
            $form->text('weight', __('Weight'));
            $form->text('voltage', __('Voltage'));
            $form->text('angle', __('Angle'));
            $form->text('waterproof', __('Waterproof'));
            $form->text('life', __('Life'));
            $form->text('distance', __('Distance'));
            $form->text('material', __('Material'));
            $form->text('characteristic', __('Characteristic'));
            $form->switch('is_show', __('Is show'));
            $form->number('sort')->default(ProductCategory::count() + 1);
        });

        $form->column(12, function ($form) {

            $form->ckeditor('content');
        });





        return $form;
    }
}
