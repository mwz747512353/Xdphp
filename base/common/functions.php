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

//系统核心函数库
/*系统输出调试
/* @var 调试内容
/* @exit 是否截断  0 不截断  1截断
/* @Author: WenZhen Miao <747512353@qq.com>
*/
if (!function_exists('export')) {
   function export($var,$exit=0){
          if(is_bool($var)){
              var_dump($var);          
          }elseif(is_null($var)){
              var_dump(null);
          }else{
              echo '<pre>'.print_r($var,true).'</pre>';
          }
          $exit===1?exit():'';
         
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

//系统核心函数库
/*系统输出调试
/* @var 调试内容
/* @exit 是否截断  0 不截断  1截断
/* @Author: WenZhen Miao <747512353@qq.com>
*/
if (!function_exists('export')) {
   function export($var,$exit=0){
          if(is_bool($var)){
              var_dump($var);          
          }elseif(is_null($var)){
              var_dump(null);
          }else{
              echo '<pre>'.print_r($var,true).'</pre>';
          }
          $exit===1?exit():'';
         
   }
>>>>>>> v1.0.00孵化版
}