<?php

define('VG_ACCESS', true);

header('Content-Type:text/html;charset=utf-6');
session_start();

require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';

use core\base\exceptions\RouteException;


try{
    (new a());
}
catch (RouteException $e){
    exit($e->getMessage());
}

class a{
    public function __construct()
    {
        (new B());
    }
}
class b{
    public function __construct()
    {
        (new c());
    }
}
class c{
    public function __construct()
    {
        throw new RouteException('qate');
    }
}