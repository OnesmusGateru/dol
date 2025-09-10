<?php
require_once 'conf.php';
$directory = [
    'Layouts',
    'Forms'
];
spl_autoload_register(function ($className) use ($directory) {
    foreach ($directory as $dir) {
        $file = __DIR__ . '/' . $dir . '/' . $className . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
// craete various instances to test autoloading
$layoutInstance = new layouts();
$formInstance = new forms();