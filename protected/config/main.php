<?php
return array(
    'application' => array(
        'Name' => 'Innova ERP',
        'Slogan' => '',
        'Company' => 'Vensoftic',
        'Version' => '1.0.0.5',
        'Url' => 'www.vensoftic.com',
        'baseDir'=>'app'
    ),
    'defaultConfig' => array(
        'defaultController' => 'login',
        'defaultMethod' => 'index',
        'defaultLayout' => 'dashboard',
    ),
    'database' => array(
        'mysql' => array(
            'hostname' => 'localhost',
            'username' => 'DevRoot', //'vensofti_root',
            'password' => 'Nathan', //'yuanst6wu2or',
            'database' => 'test',
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
