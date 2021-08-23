<?php

/**
 * this is an "alias" for current directory,
 * use it for including files
 */

define("root" , __DIR__);

include_once "logic/router.php";

/**
 * from now, you can add your own routes like route('url', 'function_name');
 */

route($_SERVER['REQUEST_URI']);
