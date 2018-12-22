<?php
namespace base;
// +----------------------------------------------------------------------
// | XDPHP [ WE CAN DO IT JUST XINDE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019 xinde All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: WenZhen Miao <747512353@qq.com>
// +----------------------------------------------------------------------
use xinde\exception\Exception;

//系统核心入口文件
class xinde{
      public static $classArr=[];
      public static $classPath='';//需要加载的文件
      public static $module;
      public static $controller;
      public static $assign;
      public static $controller_file;
      public static $controller_class;
     //默认基础执行方法
     static public function send(){         
          // 模块/控制器绑定
          $route=export_class('\xinde\route');
            self::$module=$route->module;
            self::$controller=ucfirst(strtolower($route->controller));
            $aciton=$route->action;
            self::$controller_file=APP_PATH.self::$module.SP.'controller'.SP.self::$controller;
            self::$controller_class='\\'.A_NAME.'\\'.self::$module.SP.'controller'.SP.self::$controller;
        
            try{
                if(is_file(self::$controller_file.EXT)){
                    require self::$controller_file.EXT;
                    if(class_exists(self::$controller_class)){
                        $new_controller=new self::$controller_class();
                         if(!method_exists($new_controller,$aciton)){
                             throw new Exception('方法未定义'.$aciton);
                        }else{
                            $new_controller->$aciton();
                        }
                     
                    }else{
                        throw new Exception('找不到控制器'.self::$controller);
                    }
                }else{
                    throw new Exception('找不到控制器'.self::$controller);
                }
            }catch(Exception $e){
                echo $e->errorMessage();
            }
            
              
           
     }
     //自动加载系统类库
     //$className='\lib\$className';
     static public function load($className){   
         if(isset($classArr[$className])){
             return true;
         }
         str_replace('\\','/',$className);  
         $classPath=L_PATH.$className.EXT;   
         if(is_file($classPath)){
           require $classPath;
           self::$classArr[$className]=$className;
         }
        return false;
     }
    static public function assign($name,$value){
          $view=export_class('\xinde\view');
          self::$assign[$name]=$value;
          $view->assign($name,$value);
     }
     static public function fetch($file,$data=[]){
          $view=export_class('\xinde\view');
            $route=export_class('\xinde\route');
          $file=$file?$file:$route->action;
          $dataAll=array_merge(self::$assign,$data);
          $view->fetch($file,$dataAll);
     }
 
}