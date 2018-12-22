<?php
namespace app\index\controller;

class Index extends \base\xinde{
    public function index(){
        $config=\xinde\config::get('type','database');
        $config=\xinde\config::get('hostname','database');
        if(config('database.type','has')){
            echo config('database.type');
        }
        $this->assign("title","视图测试");
        $this->fetch("",['name'=>'hello world!']);
    }
}