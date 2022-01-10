<?php //>

namespace matrix\laravel;

class Controller {

    public function __invoke($path = '') {
        $prefix = base_path();

        define('APP_HOME', "{$prefix}/matrix/");
        define('FILES_HOME', "{$prefix}/public/files/");
        define('PATH_INFO', "/{$path}");
        define('MATRIX', "{$prefix}/vendor/matrix-platform/core/");
        define('VENDOR_HOME', "{$prefix}/vendor/");

        return require MATRIX . 'app.php';
    }

}
