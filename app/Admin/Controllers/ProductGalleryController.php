<?php

namespace App\Admin\Controllers;

use App\Models\ProductGallery;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class ProductGalleryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '产品图片';
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductGallery());

        $grid->column('id', __('Id'));
        $grid->column('pro_id', __('Pro id'));
        $grid->image('gallery', __('Gallery'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('is_show', __('Is show'));
        $grid->column('sort', __('Sort'));

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
        $show = new Show(ProductGallery::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('pro_id', __('Pro id'));
        $show->field('gallery', __('Gallery'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('is_show', __('Is show'));
        $show->field('sort', __('Sort'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProductGallery());
        $proId = $this->request->get('pro_id');
        $form->text('pro_id')->default($proId)->readonly();
        $form->image('gallery', __('Gallery'));
        $form->switch('is_show', __('Is show'));
        $form->text('sort', __('Sort'))->default(0);

        $form->tools(function (Form\Tools $tools) use ($proId){
            $tools->disableList();
            $tools->add('<a class="btn btn-sm btn-danger" href='.route('products.show', ['product' => $proId]) .'><i class="fa fa-list"></i>&nbsp;&nbsp;list</a>');
        });

        return $form;
    }
}
