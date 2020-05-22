<?php

namespace App\Admin\Controllers;

use App\Common\GlobalConfiguration;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ProductCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ArticlesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '新闻';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article());

        $grid->filter(function ($filter){
            $filter->disableIdFilter();
            $filter->equal('domain_id')->select(GlobalConfiguration::$domainMap);
            $filter->equal('map_id')->select(Article::category());
        });
        $grid->column('id', __('Id'));
        $grid->column('domain_id')->editable('select', GlobalConfiguration::$domainMap);
        $grid->column('map_id', __('map_id'))->editable('select', GlobalConfiguration::$articleMap);
        $grid->column('title', __('Title'));
        $grid->column('thumbnail', __('Thumbnail'))->image('/storage', 80);
        $grid->column('author', __('Author'));
        $grid->column('updated_at', __('Updated at'));
        $states = [
            'on'  => ['value' => 1, 'text' => '打开', 'color' => 'primary'],
            'off' => ['value' => 2, 'text' => '关闭', 'color' => 'default'],
        ];
        $grid->column('is_show', __('Is show'))->switch($states);
        $grid->column('sort', __('Sort'))->editable();
        $grid->column('cat_sort', __('Cat Sort'))->editable();

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
        $show = new Show(Article::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('cat_id', __('Cat id'));
        $show->field('seo_title', __('Seo title'));
        $show->field('seo_keywords', __('Seo keywords'));
        $show->field('seo_description', __('Seo description'));
        $show->field('title', __('Title'));
        $show->thumbnail()->image();
        $show->field('author', __('Author'));
        $show->field('clicks', __('Clicks'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('is_show', __('Is show'));
        $show->field('sort', __('Sort'));
        $show->field('cat_sort', __('Cat sort'));
        $show->content()->as(function ($content){
            return $content;
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
        $form = new Form(new Article());

        $form->select('domain_id')->options(GlobalConfiguration::$domainMap);
        $form->select('map_id')->options(Article::category());
        $form->text('seo_title', __('Seo title'));
        $form->text('seo_keywords', __('Seo keywords'));
        $form->text('seo_description', __('Seo description'));
        $form->text('title', __('Title'));
        $form->image('thumbnail', '新闻封面');
        $form->text('author', __('Author'))->default('澳镭照明-新闻部');
        $form->text('clicks', __('Clicks'));
        $form->switch('is_show', __('Is show'));
        $form->number('sort')->default(Article::count() + 1);
        $form->ueditor('content', __('Content'));
        $form->hidden('cat_sort');
        $form->saving(function (Form $form){
            $form->cat_sort = Article::where('map_id', $form->map_id)->count() + 1;
        });
        return $form;
    }
}
