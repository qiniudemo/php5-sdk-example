<?php

define('APPNAME', 'photo360');
define('HOMEPAGE', '/');
define('DOMAIN', $_SERVER["HTTP_HOST"]);
define('HOST', 'http://'.DOMAIN.'/');

$config = array(

    # DEBUG
    'error' => array(
        'reporting'       => 4095,
        'throw_exception' => true,
    ),

    # 数据库
    'db' => array(
        'adapter'            => 'mysql',
        'host'               => '127.0.0.1',
        'dbname'             => APPNAME . '_development',
        'username'           => APPNAME . '_devuser',
        'password'           => APPNAME . '_development_password',
        'charset'            => 'utf8',
        'use_pconnect'       => true,
        'use_buffered_query' => true,
        'throw_exception'    => true,
    ),

    # qiniu account
    'qbox' => array(
        'access_key' => 'iN7NgwM31j4-BZacMjPrOQBs34UG1maYCAQmhdCV',
        'secret_key' => '6QTOr2Jg1gcZEWDQXKOGZh5PziC2MCV5KsntT70j',
        'bucket'     => 'photo360_albums',
    ),

);
