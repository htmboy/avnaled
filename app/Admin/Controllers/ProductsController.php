<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Product\Gallery;
use App\Common\GlobalConfiguration;
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
        $grid->filter(function ($filter){
            $filter->disableIdFilter();
            $filter->equal('cat_id')->select(ProductCategory::get(['id', 'name'])->keyBy('id')->map(function ($item){
                return $item->name;
            }));
        });
        $grid->actions(function ($actions){
            $actions->add(new Gallery);
        });
//        $grid->column('cat_id', '分类')->filter(ProductCategory::getProductMap());
        $grid->model()->orderByDesc('sort');
        $grid->column('id');
        $grid->column('cat_id')->editable('select', ProductCategory::get(['id', 'name'])->keyBy('id')->map(function ($item){
            return $item->name;
        }));
        $grid->column('title');
        $grid->column('thumbnail')->image('/storage', 80);
        $grid->column('updated_at')->date('Y-m-d');
        $states = [
            'on' => ['value' => 1, 'text' => '显示'],
            'off' => ['value' => 0, 'text' => '不显示'],
        ];
        $grid->column('is_show')->switch($states);
        $grid->column('sort')->editable();
        $grid->column('cat_sort')->editable();

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



        $show->field('title');
        $show->thumbnail()->image();

        $show->gallery('产品图片', function ($gallery) {
            $gallery->resource('/admin/product-galleries');
            $gallery->id();
            $gallery->gallery()->image();
            $states = [
                'on' => ['value' => 1, 'text' => '显示'],
                'off' => ['value' => 0, 'text' => '不显示'],
            ];
            $gallery->is_show()->switch($states);
            $gallery->sort()->editable();
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
            $form->select('cat_id')->options(ProductCategory::get(['id', 'name'])->keyBy('id')->map(function ($item){
                return $item->name;
            }));
            $form->text('seo_title', __('Seo title'));
            $form->text('seo_keywords');
            $form->text('seo_description');
            $form->text('title');
            $form->image('thumbnail');
            $form->switch('is_show', __('Is show'));
            $form->number('sort')->default(Product::count() + 1);
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
            $form->hidden('cat_sort');

        });

        $form->column(12, function ($form) {

            $form->ueditor('content');
        });

        $form->saving(function (Form $form){
            $form->cat_sort = Product::where('cat_id', $form->cat_id)->count() + 1;
        });



        return $form;
    }
}
