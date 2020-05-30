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

        $grid = new Grid(new Carousel());
        $grid->filter(function ($filter){
            $filter->disableIdFilter();
            $filter->equal('domain_id')->select(DomainConfig::getDomainMap());
        });
        $grid->model()->orderBy('sort', 'desc');
        $grid->column('domain_id')->editable('select', DomainConfig::getDomainMap());
        $grid->column('title');
        $grid->column('site')->image('/storage');
        $grid->column('link')->link();
        $grid->column('created_at')->date('Y-m-d');
        $grid->column('updated_at')->date('Y-m-d');
        $states = [
            'on' => ['value' => 1, 'text' => '显示'],
            'off' => ['value' => 0, 'text' => '不显示'],
            ];
        $grid->column('is_show')->switch($states);
        $grid->column('sort')->editable();

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
        $file = $this->request->file('site');
        $form = new Form(new Carousel());
        $form->model()->orderByDesc('sort');
        $form->select('domain_id')->options(DomainConfig::getDomainMap())->rules('required|max:80');
        $form->text('title')->rules('required|max:80');
        $form->text('alt')->rules('required|max:80');
        $form->image('site', '图片尺寸 1920*527')
            ->move('carousel/'.date('Ym', time()), date('dHis', time()).'.'.$file->getClientOriginalExtension())
            ->rules('required|max:150')->resize(1920, 527);
        $form->url('link')->rules('required|max:100');
        $form->switch('is_show');
        $form->number('sort')->default(Carousel::count() + 1)->rules('required');

        return $form;
    }
}
