<?php
return array(
    'application' => array(
        'Name' => 'Impulsando tu Web',
        'Slogan' => '',
        'Company' => 'Vensoftic',
        'Version' => '1.0.0.5',
        'Url' => 'www.vensoftic.com',

    ),
    'defaultConfig' => array(
        'defaultController' => 'site',
        'defaultMethod' => 'index',
        'defaultLayout' => 'site',
    ),
    'database' => array(
        'mysql' => array(
            'hostname' => 'localhost',
            'username' => 'root', //'vensofti_root',
            'password' => '', //'yuanst6wu2or',
            'database' => 'innova',
            'charset' => 'utf8',
        ),
    ),
    'modules' => array(
        'admin' => array(
            'Controller' => 'login',
        ),
        'shop' => '',
    ),
);
