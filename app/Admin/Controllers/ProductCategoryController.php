<?php

namespace App\Admin\Controllers;

use App\Models\ProductCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Layout\Content;
use Encore\Admin\Traits\ModelTree;

class ProductCategoryController extends AdminController
{
    use ModelTree;
    /**
     * Title for current resource.
     *
     * @var string
     */

    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header('产品类目');
            $content->body(ProductCategory::tree());
        });
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProductCategory());

        $form->select('pid')->options(ProductCategory::where('pid', 0)->get(['id', 'name'])->map(function ($item){
            return [$item->id => $item->name];
        })->collapse()->all());
        $form->text('name')->rules('required');
        $form->switch('is_show');
        $form->number('sort')->default(ProductCategory::count() + 1);
        return $form;
    }
}
