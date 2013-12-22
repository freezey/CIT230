<?php

class Home extends BaseController{

    public function index(){
        $this->title = 'Home';
        ob_start();
        include('View/Home.php');
        $content = ob_get_clean();
        return $content;
    }

    public function sitePlan(){
        ob_start();
        include('View/sitePlan.php');
        $content = ob_get_clean();
        return $content;
    }

    public function assetList(){
        ob_start();
        include('View/assetList.php');
        $content = ob_get_clean();
        return $content;
    }

    public function register(){
        ob_start();
        include('View/register.php');
        $content = ob_get_clean();
        return $content;
    }

    public function historical(){
        ob_start();
        include('View/historical.php');
        $content = ob_get_clean();
        return $content;
    }
}
