<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Slim\\Views\\' => array($vendorDir . '/slim/php-view/src'),
    'Slim\\' => array($vendorDir . '/slim/slim/Slim'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-message/src'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'PHPMailer\\PHPMailer\\' => array($vendorDir . '/phpmailer/phpmailer/src'),
    'Mail\\' => array($vendorDir . '/phpmailer/phpmailer/src'),
    'Interop\\Container\\' => array($vendorDir . '/container-interop/container-interop/src/Interop/Container'),
    'GORM\\' => array($baseDir . '/Api/Model/GORM/src'),
    'FastRoute\\' => array($vendorDir . '/nikic/fast-route/src'),
    'Api\\' => array($baseDir . '/Api'),
);
