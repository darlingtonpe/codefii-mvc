<?php
/* Codefii Php Framework
 * Author: @Prince E. Darlington
 */
define('DS','/');
define('ROOT',dirname(__FILE__));
isset($_SERVER['PATH_INFO']) ? explode('/',ltrim($_SERVER['PATH_INFO'],'/')): [];
require_once(ROOT.DS.'core'.DS.'Routes.php');
require_once(ROOT.DS.'vendor'.DS.'autoload.php');
    // use Users\People\All as All;//psr-4 standard
    function __autoload($class)
    {
        if(file_exists('./classes/'.$class.'.php'))
        {
          require_once './classes/'.$class.'.php';
          require_once(ROOT.DS.'core'.DS.'boot.php');
          }else if(file_exists('./controllers/'.$class.'.php'))
        {
          require_once './controllers/'.$class.'.php';
        }
        if(file_exists('./models/'.$class.'.php'))
        {
          require_once './models/'.$class.'.php';
        }
    }
// $user = new Users\People\add;
