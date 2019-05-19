#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: billge
 * Date: 16-9-30
 * Time: 下午4:32
 */
date_default_timezone_set('Asia/Shanghai');

defined('RUN_SHELL') or define('RUN_SHELL', true);
//dev pre pub
defined('SYS_ENV') or define('SYS_ENV', 'dev');

defined('APP_DIR') or define('APP_DIR', 'app');

ini_set('display_errors','On');
error_reporting(E_ALL);

include __DIR__ . '/lib/App.php';

App::registry(__DIR__ . '/' . APP_DIR);
App::shell();