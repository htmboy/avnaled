<?php
/**
 * Created by PhpStorm.
 * User: htmboy
 * Date: 20-5-14
 * Time: 下午10:18
 */

namespace App\Admin\Extensions\Form;


use Encore\Admin\Form\Field;

class CKEditor extends Field
{
    public static $js = [
        '/packages/ckeditor/ckeditor.js',
        '/packages/ckeditor/adapters/jquery.js',
    ];

    protected $view = 'admin.ckeditor';

    public function render()
    {
        $this->script = "$('textarea.{$this->getElementClassString()}').ckeditor();";

        return parent::render();
    }

}