<?php

namespace App\Admin\Forms;

use App\Common\DomainConfig;
use App\Models\Config;
use Encore\Admin\Widgets\Form;
use Illuminate\Http\Request;

class PokSEO extends Form
{

    protected $seo_field;
    protected $domain;
    /**
     * The form title.
     *
     * @var string
     */
    public $title = 'pok SEO设置';

    public function __construct()
    {
        parent::__construct();
        $this->seo_field = (include (app_path('Common/SEOItemConfig.php')))[DomainConfig::DOMAIN_POK];
        $this->domain = 'pok';
    }

    /**
     * Handle the form request.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request)
    {

        $config = Config::where('key', 'seo.'.$this->domain)->first();

        if($config){

            $config->value = json_encode($request->input());
            $config->save();

        }else{

            Config::create([
                'key' => 'seo.'.$this->domain,
                'value' => json_encode($request->input())
            ]);
        }

        admin_success('数据处理成功.');

        return back();
    }

    /**
     * Build a form here.
     */
    public function form()
    {
//        dd($this->seo_field);
        foreach ($this->seo_field as $value){
            $this->text($value.'.title',  __($value).'.标题')->rules('required');
            $this->text($value.'.keywords', __($value).'.关键字')->rules('required');
            $this->textarea($value.'.description', __($value).'.描述')->rules('required');
        }

    }

    /**
     * The data of the form.
     *
     * @return array $data
     */
    public function data()
    {
        $config = Config::where('key', 'seo.'.$this->domain)->first();
        if (!$config)
            return [];
        $seo = json_decode($config->value, true);

        $data = array();


        foreach ($this->seo_field as $item){
            $data[$item.'.title'] = $seo[$item]['title']??null;
            $data[$item.'.keywords'] = $seo[$item]['keywords']??null;
            $data[$item.'.description'] = $seo[$item]['description']??null;
        }

        return $data;
    }
}
