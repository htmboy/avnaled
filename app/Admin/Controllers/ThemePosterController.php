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
        $grid->column('domain_id', '域名')->editable('select', DomainConfig::getDomainMap());
        $grid->column('type', '类型')->using(ThemePoster::getTypeMap());
        $grid->column('type_id', '二级类型')->display(function ($type_id){
            if ($this->type == ThemePoster::TYPE_PRODUCT)
                return array_merge([0 =>'总列表'], Product::getCategoryMap()->toArray())[$type_id];
            if ($this->type == ThemePoster::TYPE_ARTICLE)
                return array_merge([0 =>'总列表'], Article::getCategoryMap())[$type_id];
            return '未知类型';
        });
//        $grid->column('type_id', '二级类型');
        $grid->column('title', __('Title'));
        $grid->column('alt', __('Alt'));
        $grid->column('site', __('Site'))->image();
        $grid->column('link', __('Link'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $states = [
            'on'  => ['value' => 1, 'text' => '打开', 'color' => 'primary'],
            'off' => ['value' => 2, 'text' => '关闭', 'color' => 'default'],
        ];
        $grid->column('is_show', __('Is show'))->switch($states);

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

        $show->field('id', __('Id'));
        $show->field('domain_id', __('Domain id'));
        $show->field('type', __('Type'));
        $show->field('type_id', __('Type id'));
        $show->field('title', __('Title'));
        $show->field('alt', __('Alt'));
        $show->field('site', __('Site'));
        $show->field('link', __('Link'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        $show->field('is_show', __('Is show'));

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

        $form->select('domain_id', '域名')->options(DomainConfig::getDomainMap())->rules('required');
        $form->radio('type', __('Pro cat id'))->options(ThemePoster::getTypeMap())->when(1, function (Form $form){
            $form->select('type_id', __('Art cat id'))->options(array_merge(['0' => '总列表'], Product::getCategoryMap()->toArray()))->rules('required');

        })->when(2, function (Form $form){
            $form->select('type_id', __('Art cat id'))->options(array_merge(['0' => '总列表'], Article::getCategoryMap()))->rules('required');

        });
//        $form->select('type_id', __('Art cat id'))->options(array_merge(['0' => '总列表'], Article::getCategoryMap(), Product::getCategoryMap()->toArray()))->rules('required');
        $form->text('title', __('Title'))->rules('required');
        $form->text('alt', __('Alt'))->rules('required');
        $form->image('site', '图片尺寸 1600*300')
            ->uniqueName()
            ->rules('required|max:150')->resize(1600, 300);
        $form->url('link', __('Link'));
        $form->switch('is_show', __('Is show'));

        return $form;
    }
}
