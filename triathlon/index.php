<?php
/**
 * Created by PhpStorm.
 * User: jordan
 * Date: 9/23/13
 * Time: 11:18 AM
 */

if (isset($_GET['url'])){
    $url = $_GET['url'];
} else {
    $url = 'Home';
}
$url = explode('/', $url);
$controller = ucfirst(array_shift($url));
$params = $url;

if (empty($controller)){
    $controller = 'Home';
}
if (file_exists(__DIR__ . '/' . 'Controller' . '/' . $controller . '.php')){
    require('Controller/BaseController.php');
    require('Controller/' . $controller . '.php');
    $Controller = new $controller($params);
    $content = $Controller->_render();
} else {
    $content = 'File Not Found';
}

$headerNavItems = array(
    'Home' => '/Home',
    'What is a Form' => '/Assessments/form',
    'Php Tools' => '/phpTools/index',
    'Javascript Tools' => '/javascriptTools/index',
);
ob_start();
include ('header.php');
$header = ob_get_clean();

$footerNavItems = array(
    'main' => array(
        'Home' => '/Home',

    ),
);

ob_start();
include('footer.php');
$footer = ob_get_clean();

$title = $Controller->title . ' - ' . $controller;

ob_start();
include('layout.php');
$page = ob_get_clean();

//output headers


//output page
echo $page;