<?php

namespace App\Admin\Controllers;

use App\Common\DomainConfig;
use App\Models\Article;
use App\Models\SearchWord;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SearchWordController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '搜索关键词';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SearchWord());
        $grid->filter(function ($filter){
            $filter->disableIdFilter();
            $filter->equal('domain_id')->select(DomainConfig::getDomainMap());
        });
        $grid->model()->orderByDesc('sort');
        $grid->column('id', __('Id'));
        $grid->column('domain_id', __('Domain id'))->editable('select', DomainConfig::getDomainMap());
        $grid->column('keyword', __('Keyword'));
        $grid->column('link', __('Link'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $states = [
            'on'  => ['value' => 1, 'text' => '打开', 'color' => 'primary'],
            'off' => ['value' => 2, 'text' => '关闭', 'color' => 'default'],
        ];
        $grid->column('is_show', __('Is show'))->switch($states);
        $grid->column('sort', __('Sort'))->editable();

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
        $show = new Show(SearchWord::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('domain_id', __('Domain id'));
        $show->field('keyword', __('Keyword'));
        $show->field('link', __('Link'));
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
        $form = new Form(new SearchWord());

        $form->select('domain_id', __('Domain id'))->options(DomainConfig::getDomainMap())->rules('required');
        $form->text('keyword', __('Keyword'))->rules('required|max:100');
        $form->url('link', __('Link'));
        $form->switch('is_show', __('Is show'));
        $form->number('sort', __('Sort'))->default(SearchWord::count() +1 )->rules('required');

        return $form;
    }
}
