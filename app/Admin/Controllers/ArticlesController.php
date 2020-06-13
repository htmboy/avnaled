<?php

namespace App\Admin\Controllers;

use App\Common\DomainConfig;
use App\Common\GlobalConfiguration;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ProductCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class ArticlesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '新闻';
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


        $grid = new Grid(new Article());
        $grid->filter(function ($filter){
            $filter->disableIdFilter();
            $filter->equal('domain_id')->select(DomainConfig::getDomainMap());
            $filter->equal('map_id')->select(Article::getCategoryMap());
        });
        $grid->model()->orderByDesc('sort');
        $grid->column('id', __('id'));
        $grid->column('domain_id', __('domain_id'))->editable('select', DomainConfig::getDomainMap());
        $grid->column('map_id', __('map_id'))->editable('select', Article::getCategoryMap());
        $grid->column('title', __('title'));
        $grid->column('thumbnail', 'thumbnail')->image('/storage', 160);
        $grid->column('thumbnail_vertical', 'thumbnail_vertical')->image('/storage', 90);
        $grid->column('author', __('author'));
        $grid->column('updated_at', __('updated_at'));
        $states = [
            'on'  => ['value' => 1, 'text' => '打开', 'color' => 'primary'],
            'off' => ['value' => 2, 'text' => '关闭', 'color' => 'default'],
        ];
        $grid->column('is_show', __('is_show'))->switch($states);
        $grid->column('sort', __('sort'))->editable();
        $grid->column('cat_sort', __('cat_sort'))->editable();

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

        $show->field('id', __('id'));
        $show->field('cat_id', __('cat_id'));
        $show->field('seo_title', __('seo_title'));
        $show->field('seo_keywords', __('seo_keywords'));
        $show->field('seo_description', __('seo_description'));
        $show->field('title', __('title'));
        $show->field('thumbnail', __('thumbnail'))->image();
        $show->field('thumbnail_vertical', __('thumbnail_vertical'))->image();
        $show->field('author', __('author'));
        $show->field('clicks', __('clicks'));
        $show->field('created_at', __('created_at'));
        $show->field('updated_at', __('updated_at'));
        $show->field('is_show', __('is_show'));
        $show->field('sort', __('sort'));
        $show->field('cat_sort', __('cat_sort'));
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

        $form->select('domain_id', __('domain_id'))->options(DomainConfig::getDomainMap())->rules('required');
        $form->select('map_id', __('map_id'))->options(Article::getCategoryMap())->rules('required');
        $form->text('seo_title', __('seo_title'))->rules('required|max:40');
        $form->text('seo_keywords', __('seo_keywords'))->rules('required|max:40');
        $form->text('seo_description', __('seo_description'))->rules('required|max:80');
        $form->text('title', __('title'))->rules('required|max:80');
        $form->image('thumbnail', '图片比例 4:3(横)')->uniqueName()
            ->rules('required|max:100')->resize(400, 300);
        $form->image('thumbnail_vertical', '图片比例 3:4(竖)')->uniqueName()
            ->rules('required|max:100')->resize(300, 400);
        $form->text('author', __('author'))->default('澳镭照明-新闻部');
        $form->number('clicks', __('clicks'))->default('20')->rules('required');
        $form->switch('is_show', __('is_show'));
        $form->number('sort', __('sort'))->default(Article::count() + 1)->rules('required');
        $form->ueditor('content', __('content'))->rules('required');
        $form->hidden('cat_sort');
        $form->saving(function (Form $form){
            $form->cat_sort = Article::where('map_id', $form->map_id)->count() + 1;
        });
        return $form;
    }
}
