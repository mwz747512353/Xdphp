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
//model基类
class model extends \PDO{
     
     public static $config=[
            'type'=>'mysql',
            'hostname'=>'localhost',
            'database'=>'',
            'username'=>'',
            'password'=>'',
            'port'=>'3306',
            'dsn'=>'',
            'prefix'=>''
     ];
      public static $options=[];
   public function __construct(){
          
       $dsn='mysql:host=localhost;dbname=xdphp';
       $username='root';
       $password='root';
       try{
           parent::__construct($dsn,$username,$password,self::$options);
       }catch(Exception $e){
             echo $e->errorMessage();
       }
   }
}