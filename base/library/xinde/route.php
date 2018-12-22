<?php
namespace xinde;
// +----------------------------------------------------------------------
// | XDPHP [ WE CAN DO IT JUST XINDE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019 xinde All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: WenZhen Miao <747512353@qq.com>
// +----------------------------------------------------------------------

//路由文件
class route{
    //隐藏index.php
    //获得参数
    //返回控制器及其方法
    public $module;
    public $controller;
    public $action;
    public function __construct(){
       $_GET=[];
        
       if(isset($_SERVER['PATH_INFO']) || isset($_SERVER['REDIRECT_URL'])){
           $path=isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:$_SERVER['REDIRECT_URL'];
           $patharr=explode('/',trim($path,'/'));
         
           if(BIND_MODULE){
               $this->module=BIND_MODULE;               
           }else{
               $this->module='index';
           }
            
           if($patharr[0]){     
               $this->controller=$patharr[0];     
               unset($patharr[0]);          
           }else{
               $this->controller='index';   
           }
           if(isset($patharr[1])){
               $this->action=$patharr[1]; 
                unset($patharr[1]);        
           }else{
               $this->action='index';
           }
           //url get参数
           $i=2;
           while($i<count($patharr)+2){
               if(isset($patharr[$i+1])){
                   $_GET[$patharr[$i]]=$patharr[$i+1];
               }
               $i=$i+2;
           }
      
       }else{
            $this->module=BIND_MODULE?BIND_MODULE:'index';
           $this->controller='index';
           $this->action='index';
       }
    }
}