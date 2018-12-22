<<<<<<< HEAD
<?php
// +----------------------------------------------------------------------
// | XDPHP [ WE CAN DO IT JUST XINDE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019 xinde All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: WenZhen Miao <747512353@qq.com>
// +----------------------------------------------------------------------
use xinde\config;
//助手函数库
/* 获取配置
/* @name 获取配置名称  
/* @type 请求类型 目前支持获取与判断  type为has时返回非false则输出当前配置值
/* @Author: WenZhen Miao <747512353@qq.com>
*/
if (!function_exists('config')) {
   function config($name='',$type='get'){
       $typeAll=['get','has'];
        if(in_array($type,$typeAll)){
             if(strpos($name,'.')!==false){
                        $data=explode('.',$name);
                        if(count($data)>2){
                            export('配置值填写错误',1);
                        }
                        
                        if($data[1]===''){
                            if($type=='has'){
                                 export('配置值不能为空',1);
                            }
                            return config::all($data[0]);
                        }
                        return $type=='has'?config::has($data[1],$data[0]):config::get($data[1],$data[0]);
                    }else{
                        if($name!==''){                      
                            return $type=='has'?config::has($name,'config'):config::get($name,'config');
                        }
                        export('配置值不能为空',1);
                    }
                   
            
        }else{
             export('请求类型错误',1);
        }
         
         
   }
}
/* 加载并实例化类 
/* @name 类命名空间  
/* @data 类的属性
/* @Author: WenZhen Miao <747512353@qq.com>
*/
if (!function_exists('export_class')) {
   function export_class($name='',$data=''){
       static $nameAll=[];
       if($name===''){
            export('参数不能为空',1);
       }
       if($data!==''){
           $dataString=implode(',',$data);
       }
       if(isset($nameAll[$name])){            
           return new $nameAll[$name](isset($dataString)?$dataString:'');
       }else{         
            $nameAll[$name]=$name;
            return new $name(isset($dataString)?$dataString:'');
       }
       
   }
=======
<?php
// +----------------------------------------------------------------------
// | XDPHP [ WE CAN DO IT JUST XINDE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019 xinde All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: WenZhen Miao <747512353@qq.com>
// +----------------------------------------------------------------------
use xinde\config;
//助手函数库
/* 获取配置
/* @name 获取配置名称  
/* @type 请求类型 目前支持获取与判断  type为has时返回非false则输出当前配置值
/* @Author: WenZhen Miao <747512353@qq.com>
*/
if (!function_exists('config')) {
   function config($name='',$type='get'){
       $typeAll=['get','has'];
        if(in_array($type,$typeAll)){
             if(strpos($name,'.')!==false){
                        $data=explode('.',$name);
                        if(count($data)>2){
                            export('配置值填写错误',1);
                        }
                        
                        if($data[1]===''){
                            if($type=='has'){
                                 export('配置值不能为空',1);
                            }
                            return config::all($data[0]);
                        }
                        return $type=='has'?config::has($data[1],$data[0]):config::get($data[1],$data[0]);
                    }else{
                        if($name!==''){                      
                            return $type=='has'?config::has($name,'config'):config::get($name,'config');
                        }
                        export('配置值不能为空',1);
                    }
                   
            
        }else{
             export('请求类型错误',1);
        }
         
         
   }
}
/* 加载并实例化类 
/* @name 类命名空间  
/* @data 类的属性
/* @Author: WenZhen Miao <747512353@qq.com>
*/
if (!function_exists('export_class')) {
   function export_class($name='',$data=''){
       static $nameAll=[];
       if($name===''){
            export('参数不能为空',1);
       }
       if($data!==''){
           $dataString=implode(',',$data);
       }
       if(isset($nameAll[$name])){            
           return new $nameAll[$name](isset($dataString)?$dataString:'');
       }else{         
            $nameAll[$name]=$name;
            return new $name(isset($dataString)?$dataString:'');
       }
       
   }
>>>>>>> v1.0.00孵化版
}