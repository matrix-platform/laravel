<?php //>

$prefix = dirname(__DIR__);

define('APP_HOME', "{$prefix}/matrix/");
define('FILES_HOME', "{$prefix}/public/files/");
define('MATRIX', "{$prefix}/vendor/matrix-platform/core/");
define('VENDOR_HOME', "{$prefix}/vendor/");

require VENDOR_HOME . 'autoload.php';
require MATRIX . 'app.php';
