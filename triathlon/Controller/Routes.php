<?php

class Routes extends BaseController{

    public function index(){
        $this->title = 'Home';
        ob_start();
        include('View/Routes/index.php');
        $content = ob_get_clean();
        return $content;
    }

    public function swimming(){
        ob_start();
        include('View/Routes/swimming.php');
        $content = ob_get_clean();
        return $content;
    }

    public function running(){
        ob_start();
        include('View/Routes/running.php');
        $content = ob_get_clean();
        return $content;
    }

    public function biking(){
        ob_start();
        include('View/Routes/biking.php');
        $content = ob_get_clean();
        return $content;
    }

}
