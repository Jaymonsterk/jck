<?php
namespace app\index\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return 'ok';
    }

    public function view()
    {
        // 或者批量赋值
        View::assign([
            'name'  => 'hello',
            'title' => 'world'
        ]);
        // 模板输出
        return View::fetch('index');
    }
}
