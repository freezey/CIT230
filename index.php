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
        'Deliberate Practice Plan' => '/Assessments/practicePlan',
        'Site Plan' => '/Home/sitePlan',
        'What is a Form' => '/Assessments/form',
    ),
    'php' => array(
        'Php Tools' => '/phpTools/index',
        'Php Tools / basics' => '/phpTools/basics',
        'Php Tools / Form to Email' => '/phpTools/formToEmail',
        'Php Tools / Timezones' => '/phpTools/timezones',
        'Php Tools / Coordinates' => '/phpTools/coordinates',
        'Php Tools / Arrays' => '/phpTools/arrayBasics',
    ),
    'javascript' => array(
        'Javascript Tools' => '/javascriptTools/index',
        'Javascript Tools / Bascics' => '/javascriptTools/basics',
        'Javascript Tools / jQuery' => '/javascriptTools/jquery',
        'Javascript Tools / Events' => '/javascriptTools/events',
        'Javascript Tools / Ajax' => '/javascriptTools/ajax',
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