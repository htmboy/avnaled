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
            $filter->equal('domain_id')->select(DomainConfig::getDomainMap());
        });
        $grid->model()->orderByDesc('sort');
        $grid->column('id', __('id'));
        $grid->column('domain_id', __('domain_id'))->editable('select', DomainConfig::getDomainMap());
        $grid->column('name', __('name'));
        $grid->column('link', __('link'));
        $grid->column('created_at', __('created_at'));
        $grid->column('updated_at', __('updated_at'));
        $grid->column('is_show', __('is_show'));
        $grid->column('sort', __('sort'));

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

        $show->field('id', __('id'));
        $show->field('domain_id', __('domain_id'));
        $show->field('name', __('name'));
        $show->field('link', __('link'));
        $show->field('created_at', __('created_at'));
        $show->field('updated_at', __('updated_at'));
        $show->field('is_show', __('is_show'));
        $show->field('sort', __('sort'));

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

        $form->select('domain_id', __('domain_id'))->options(DomainConfig::getDomainMap())->rules('required');
        $form->text('name', __('name'))->rules('required|max:80');
        $form->url('link', __('link'))->rules('required|max:100');
        $form->switch('is_show', __('is_show'));
        $form->number('sort', __('sort'))->default(Link::count() + 1)->rules('required');

        return $form;
    }
}
