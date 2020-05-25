<?php

namespace App\Admin\Controllers;

use App\Common\DomainConfig;
use App\Common\GlobalConfiguration;
use App\Models\Article;
use App\Models\Link;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LinkController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '友情链接';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Link());

        $grid->filter(function ($filter){
            $filter->disableIdFilter();
            $filter->equal('domain_id')->select(DomainConfig::$domainMap);
        });
        $grid->model()->orderByDesc('sort');
        $grid->column('id', __('Id'));
        $grid->column('domain_id', __('Domain id'))->editable('select', DomainConfig::$domainMap);
        $grid->column('name', __('Name'));
        $grid->column('link', __('Link'));
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
        $show = new Show(Link::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('domain_id', __('Domain id'));
        $show->field('name', __('Name'));
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
        $form = new Form(new Link());

        $form->select('domain_id', __('Domain id'))->options(DomainConfig::$domainMap)->rules('required');
        $form->text('name', __('Name'))->rules('required|max:80');
        $form->url('link', __('Link'))->rules('required|max:100');
        $form->switch('is_show', __('Is show'));
        $form->number('sort', __('Sort'))->default(Link::count() + 1)->rules('required');

        return $form;
    }
}
