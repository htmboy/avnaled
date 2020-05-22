<?php
/**
 * Created by PhpStorm.
 * User: htmboy
 * Date: 20-5-22
 * Time: 下午8:33
 */

namespace App\Admin\Extensions\Form;

use Encore\Admin\Form\Field;
class UEditor extends Field
{
    protected $view = 'admin.ueditor';
    protected static $css = [];
    protected static $js = [
        '/packages/ueditor/ueditor.config.js',
        '/packages/ueditor/ueditor.all.js'
    ];

    public function render()
    {
        $name = $this->formatName($this->column);

        $this->script = <<<EOT
    //解决第二次进入加载不出来的问题
    UE.delEditor("container");
    var ue = UE.getEditor('container',{
    elementPathEnabled: false,
    enableContextMenu: false,
    autoClearEmptyNode: true,
    wordCount: false,
    imagePopup: false,
     autotypeset: {indent: true, imageBlockLine: 'center'}
    });
    ue.ready(function() {
      ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');

    });

EOT;
        return parent::render();
    }
}