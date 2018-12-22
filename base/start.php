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

//初始化执行文件
define('XD_VERSION','1.0.00'); //版本号
define('XD_NAME','XDPHP'); //框架名称
//define('DEBUG',true);  //默认开启调试模式
define('SP',DIRECTORY_SEPARATOR);//目录分隔符
define('T_EXT','.html');//模板后缀
define('EXT', '.php');//框架文件默认后缀
define('CONF_EXT','.php');//配置文件后缀
defined('A_PATH') or define('A_PATH', dirname($_SERVER['SCRIPT_FILENAME']) . SP);//应用目录   public\
defined('R_PATH') or define('R_PATH', dirname(realpath(A_PATH)) . SP);//应用根目录    \
defined('XD_PATH') or define('XD_PATH', dirname(realpath(A_PATH)) . SP);//系统绝对路径目录  \
defined('APP_PATH') or define('APP_PATH', XD_PATH. 'app'. SP);//应用开发目录     app\
define('B_PATH', XD_PATH . 'base'.SP);//系统核心目录   base\
define('V_PATH', XD_PATH . 'vendor' . SP);//第三方类库应用目录   vendor\
define('L_PATH', B_PATH . 'library' . SP);//系统类库目录   base\library\
defined('RUNTIME_PATH') or define('RUNTIME_PATH', R_PATH . 'runtime' . SP);  // 缓存目录   runtime\
defined('LOG_PATH') or define('LOG_PATH', RUNTIME_PATH . 'log' . SP);  //日志目录  runtime\log\
defined('CACHE_PATH') or define('CACHE_PATH', RUNTIME_PATH . 'cache' . SP); //数据缓存目录  runtime\cache\
defined('TEMP_PATH') or define('TEMP_PATH', RUNTIME_PATH . 'temp' . SP); //模板缓存目录  runtime\temp\
defined('CONF_PATH') or define('CONF_PATH', APP_PATH); // 配置文件目录  默认app\
defined('CONF_EXT') or define('CONF_EXT', EXT); // 配置文件后缀

// 环境常量
define('IS_CLI', PHP_SAPI == 'cli' ? true : false);
define('IS_WIN', strpos(PHP_OS, 'WIN') !== false);



require B_PATH.'common/functions'.EXT;//引入系统公共函数库
require B_PATH.'common/helper'.EXT;//引入系统公共函数库
require B_PATH.'xinde'.EXT;//引入核心文件       
spl_autoload_register('\base\xinde::load');
 //设置
 ini_set('display_error',config('debug','has')?'on':'off');   
\base\xinde::send();//执行应用