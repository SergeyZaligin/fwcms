<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

use fwcms\App;

new App();

//throw new Exception('str not found', 404);
//ninja(App::$app->getProperties());