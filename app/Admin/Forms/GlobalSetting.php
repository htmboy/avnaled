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
        dd($request->input());
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
        $this->text('400',  '400号码')->rules('required');
        $this->text('tell',  '固话号码')->rules('required');
        $this->email('email',  '邮箱地址')->rules('required');
        $this->text('address',  '公司地址')->rules('required');
//        $this->image('wechat',  '微信二维码')->uniqueName()->rules('required');

    }

    /**
     * The data of the form.
     *
     * @return array $data
     */
    public function data()
    {
        $config = Config::where('key', 'setting')->first();
        if (!$config)
            return [];
        $data = json_decode($config->value, true);

        return [
            'qq' => $data['qq'],
            'mobile' => $data['mobile'],
            '400' => $data['400'],
            'tel' => $data['tel'],
            'email' => $data['email'],
            'address' => $data['address'],
//            'wechat' => $data['wechat']
        ];
    }
}
