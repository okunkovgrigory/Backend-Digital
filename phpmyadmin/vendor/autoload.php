<?php
/* Autoloader for phpMyAdmin and its dependencies */

require_once '/usr/share/php/Fedora/Autoloader/autoload.php';
\Fedora\Autoloader\Autoload::addPsr4('PhpMyAdmin\\',        dirname(__DIR__) . '/libraries/classes');
\Fedora\Autoloader\Dependencies::required([
    '/usr/share/php/PhpMyAdmin/MoTranslator/autoload.php', /* before sqlparser which may allow other version */
    '/usr/share/php/PhpMyAdmin/SqlParser5/autoload.php',
    '/usr/share/php/PhpMyAdmin/ShapeFile/autoload.php',
    '/usr/share/php/phpseclib/autoload.php',
    '/usr/share/php/ReCaptcha/autoload.php',
    [
        '/usr/share/php/Twig3/autoload.php',
        '/usr/share/php/Twig2/autoload.php',
    ],
    '/usr/share/php/PhpMyAdmin/Twig/Extensions/autoload.php',
    '/usr/share/php/Symfony4/Component/Config/autoload.php',
    '/usr/share/php/Symfony4/Component/DependencyInjection/autoload.php',
    '/usr/share/php/Symfony4/Component/ExpressionLanguage/autoload.php',
    '/usr/share/php/Symfony4/Component/Yaml/autoload.php',
    '/usr/share/php/Symfony/Polyfill/autoload.php',
    '/usr/share/php/Williamdes/MariaDBMySQLKBS/autoload.php',
]);
\Fedora\Autoloader\Dependencies::optional([
    '/usr/share/php/tcpdf/autoload.php',
    '/usr/share/php/Google2FAQRCode/Google2FA/autoload.php',
    '/usr/share/php/Samyoul/U2F/U2FServer/autoload.php',
]);
