<?php

namespace App\Admin\Forms;

use App\Models\Config;
use Encore\Admin\Widgets\Form;
use Illuminate\Http\Request;

class GlobalSetting extends Form
{

    /**
     * The form title.
     *
     * @var string
     */
    public $title = '全站设置';


    /**
     * Handle the form request.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request)
    {
//        dd($request->input());
        $config = Config::where('key', 'setting')->first();

        if($config){

            $config->value = json_encode($request->input());
            $config->save();

        }else{

            Config::create([
                'key' => 'setting',
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

        $this->text('qq',  'qq号码')->rules('required');
        $this->text('mobile',  '手机号码')->rules('required');
        $this->text('free',  '400号码')->rules('required');
        $this->text('tel',  '固话号码')->rules('required');
        $this->email('email',  '邮箱地址')->rules('required');
        $this->text('address',  '公司地址')->rules('required');
        $this->text('record',  '备案')->rules('required');
        $this->textarea('script',  '备案');

    }

    /**
     * The data of the form.
     *
     * @return array $data
     */
    public function data()
    {
        $config = Config::where('key', 'setting')->first();
        if (!$config){
            return [];
        }


        $data = json_decode($config->value, true);

        return [
            'qq' => isset($data['qq'])?$data['qq']:null,
            'mobile' => isset($data['mobile'])?$data['mobile']:null,
            'free' => isset($data['free'])?$data['free']:null,
            'tel' => isset($data['tel'])?$data['tel']:null,
            'email' => isset($data['email'])?$data['email']:null,
            'address' => isset($data['address'])?$data['address']:null,
            'record' => isset($data['record'])?$data['record']:null,
            'script' => isset($data['script'])?$data['script']:null,
        ];

    }
}
