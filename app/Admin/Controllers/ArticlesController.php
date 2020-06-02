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
        $grid->column('id', __('Id'));
        $grid->column('domain_id')->editable('select', DomainConfig::getDomainMap());
        $grid->column('map_id', __('map_id'))->editable('select', Article::getCategoryMap());
        $grid->column('title', __('Title'));
        $grid->column('thumbnail', '图片1')->image('/storage', 90);
        $grid->column('thumbnail_vertical', '图片2(竖)')->image('/storage', 50);
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
        $show->thumbnail('图片1')->image();
        $show->thumbnail_vertical('图片2')->image();
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
        $file = $this->request->file('thumbnail');
        $file_ver = $this->request->file('thumbnail_vertical');
        $form = new Form(new Article());

        $form->select('domain_id')->options(DomainConfig::getDomainMap())->rules('required');
        $form->select('map_id')->options(Article::getCategoryMap())->rules('required');
        $form->text('seo_title', __('Seo title'))->rules('required|max:40');
        $form->text('seo_keywords', __('Seo keywords'))->rules('required|max:40');
        $form->text('seo_description', __('Seo description'))->rules('required|max:80');
        $form->text('title', __('Title'))->rules('required|max:80');
        $form->image('thumbnail', '图片比例 3:2(横)')->uniqueName()
            ->rules('required|max:100')->resize(450, 300);
        $form->image('thumbnail_vertical', '图片比例 3:4(竖)')->uniqueName()
            ->rules('required|max:100')->resize(300, 400);
        $form->text('author', __('Author'))->default('澳镭照明-新闻部');
        $form->number('clicks', __('Clicks'))->default('20')->rules('required');
        $form->switch('is_show', __('Is show'));
        $form->number('sort')->default(Article::count() + 1)->rules('required');
        $form->ueditor('content', __('Content'))->rules('required');
        $form->hidden('cat_sort');
        $form->saving(function (Form $form){
            $form->cat_sort = Article::where('map_id', $form->map_id)->count() + 1;
        });
        return $form;
    }
}
