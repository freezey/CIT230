<?php

class Home extends BaseController{

    public function index(){
        ob_start();
        include('View/Home.php');
        $content = ob_get_clean();
        return $content;
    }

}
