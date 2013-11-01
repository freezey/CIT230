<?php

class PhpTools extends BaseController{

    public function index(){
        $this->title = 'PHP Tools';
        ob_start();
        include('View/PhpTools/index.php');
        $content = ob_get_clean();
        return $content;
    }



}
