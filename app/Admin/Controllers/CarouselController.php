<?php

namespace App\Admin\Controllers;

use App\Common\DomainConfig;
use App\Models\Carousel;
use App\Models\ProductCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use function foo\func;
use Illuminate\Http\Request;

class CarouselController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '轮播图';


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {

        $grid = new Grid(new Carousel());
        $grid->filter(function ($filter){
            $filter->disableIdFilter();
            $filter->equal('domain_id')->select(DomainConfig::getDomainMap());
        });
        $grid->model()->orderBy('sort', 'desc');
        $grid->column('domain_id', __('domain_id'))->editable('select', DomainConfig::getDomainMap());
        $grid->column('title', __('title'));
        $grid->column('site', __('site'))->image('/storage');
        $grid->column('link', __('link'))->link();
        $grid->column('created_at', __('created_at'))->date('Y-m-d');
        $grid->column('updated_at', __('updated_at'))->date('Y-m-d');
        $states = [
            'on' => ['value' => 1, 'text' => '显示'],
            'off' => ['value' => 0, 'text' => '不显示'],
            ];
        $grid->column('is_show', __('is_show'))->switch($states);
        $grid->column('sort', __('sort'))->editable();

        $grid->actions(function ($actions) {
            $actions->disableView();
        });

        return $grid;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Carousel());
        $form->model()->orderByDesc('sort');
        $form->select('domain_id', __('domain_id'))->options(DomainConfig::getDomainMap())->rules('required|max:80');
        $form->text('title', __('title'))->rules('required|max:80');
        $form->text('alt', __('alt'))->rules('required|max:80');
        $form->image('site', '图片尺寸 1920*527')->uniqueName()
            ->rules('required|max:150')->resize(1920, 527);
        $form->url('link', __('link'))->rules('required|max:100');
        $form->switch('is_show', __('is_show'));
        $form->number('sort', __('sort'))->default(Carousel::count() + 1)->rules('required');

        return $form;
    }
}
