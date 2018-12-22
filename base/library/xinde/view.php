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
use xinde\route;
//视图基类
class view{     
     public function __construct(){

     }
     public function assign($name,$value){
         
         $this->assign[$name]=$value;
         
     }
     public function fetch($file,$data=[]){
            $file=APP_PATH.BIND_MODULE.SP.'view'.SP.$file.T_EXT;
            if(is_file($file)){
                if(isset($data))extract($data);
                require $file;
            }else{
                export('模板文件不存在:'.$file);
            }
     }
}