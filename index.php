<?php

/**
 * this is an "alias" for current directory,
 * use it for including files
 */

define("root" , __DIR__);

include_once "logic/native/router.php";

/**
 * from now, you can add your own routes like "path":"controller function" inside the logic/config/path.json
 */

route($_SERVER['REQUEST_URI']);
