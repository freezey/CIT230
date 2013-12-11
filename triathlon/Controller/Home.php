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

}
