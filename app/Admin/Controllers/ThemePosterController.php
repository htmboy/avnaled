<?php

namespace App\Admin\Controllers;

use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ThemePoster;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class ThemePosterController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '主题海报';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ThemePoster());

        $grid->column('id', __('Id'));
        $grid->column('domain_id', __('domain_id'))->editable('select', DomainConfig::getDomainMap());
        $grid->column('type', __('type'))->using(ThemePoster::getTypeMap());
        $grid->column('type_id', __('type_id'))->display(function ($type_id){
            if ($this->type == ThemePoster::TYPE_PRODUCT)
                return array_merge([0 =>'总列表'], Product::getCategoryMap()->toArray())[$type_id];
            if ($this->type == ThemePoster::TYPE_ARTICLE)
                return array_merge([0 =>'总列表'], Article::getCategoryMap())[$type_id];
            return '未知类型';
        });
        $grid->column('title', __('title'));
        $grid->column('alt', __('alt'));
        $grid->column('site', __('site'))->image('/storage', 90);
        $grid->column('link', __('link'));
        $grid->column('created_at', __('created_at'));
        $grid->column('updated_at', __('updated_at'));
        $states = [
            'on'  => ['value' => 1, 'text' => '打开', 'color' => 'primary'],
            'off' => ['value' => 2, 'text' => '关闭', 'color' => 'default'],
        ];
        $grid->column('is_show', __('is_show'))->switch($states);

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
        $show = new Show(ThemePoster::findOrFail($id));

        $show->field('id', __('id'));
        $show->field('domain_id', __('domain_id'));
        $show->field('type', __('type'));
        $show->field('type_id', __('type_id'));
        $show->field('title', __('title'));
        $show->field('alt', __('alt'));
        $show->field('site', __('site'));
        $show->field('link', __('link'));
        $show->field('created_at', __('created_at'));
        $show->field('updated_at', __('updated_at'));

        $show->field('is_show', __('is_show'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ThemePoster());

        $form->select('domain_id', __('domain_id'))->options(DomainConfig::getDomainMap())->rules('required');
        $form->radio('type', __('type'))->options(ThemePoster::getTypeMap())->when(1, function (Form $form){
            $form->select('type_id', __('type_id'))->options(array_merge(['0' => '总列表'], Product::getCategoryMap()->toArray()))->rules('required');

        })->when(2, function (Form $form){
            $form->select('type_id', __('type_id'))->options(array_merge(['0' => '总列表'], Article::getCategoryMap()))->rules('required');

        });
        $form->text('title', __('title'))->rules('required');
        $form->text('alt', __('alt'))->rules('required');
        $form->image('site', '图片尺寸 1600*300')
            ->uniqueName()
            ->rules('required|max:150')->resize(1600, 300);
        $form->url('link', __('link'));
        $form->switch('is_show', __('is_show'));

        return $form;
    }
}
