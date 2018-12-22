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
use xinde\exception\Exception;

//配置基类
class config{     
     static public $confAll=[];
    
     /*获取配置
      *name 配置名
      *file 配置文件名
     */
     static public function get($name,$file){
        
         if(isset(self::$confAll[$file])){
            return isset(self::$confAll[$file][$name])?self::$confAll[$file][$name]:export('没有这个配置项:'.$name,1);
         }else{            
            try{                          
                $path_conf=APP_PATH.$file.CONF_EXT;
                if(is_file($path_conf)){   
                    $conf=require $path_conf;
                    if(isset($conf[$name])){
                        self::$confAll[$file]=$conf;
                        return $conf[$name];
                    }else{
                        throw new Exception('没有这个配置项:'.$name);
                    }
                } else{
                    throw new Exception('找不到这个配置文件:'.$path_conf);
                }
            }catch(Exception $e){
                    echo $e->errorMessage();
            }
         }
      
     }
      /*获取所有配置
      *name 配置名
      *file 配置文件名
     */
     static public function all($file){
         if(isset(self::$confAll[$file])){
             return isset(self::$confAll[$file])?self::$confAll[$file]:export('找不到这个配置文件:'.self::$confAll[$file],1);
         }else{           
            try{               
                $path_conf=APP_PATH.$file.CONF_EXT;
                if(is_file($path_conf)){
                    $conf=require $path_conf;
                    self::$conf[$file]=$conf;
                    return $conf;
                } else{
                    throw new Exception('找不到这个配置文件:'.$path_conf);
                }
            }catch(Exception $e){
                    echo $e->errorMessage();
            }
         }
      
     }
      /*判断配置是否存在
      *name 配置名
      *file 配置文件名
     */
    static public function has($name,$file){
        if(isset(self::$confAll[$file])){            
             return isset(self::$confAll[$file][$name])?self::$confAll[$file][$name]:false;
         }else{            
            try{            
                           
                $path_conf=APP_PATH.$file.CONF_EXT;
                if(is_file($path_conf)){   
                    $conf=require $path_conf;
                    if(isset($conf[$name])){
                        self::$confAll[$file]=$conf;
                        return $conf[$name];
                    }else{
                       return false;
                    }
                } else{
                   return false;
                }
            }catch(Exception $e){
                    echo $e->errorMessage();
            }
         }
    }
}