<?php

class Form extends BaseController{

    public function index(){
        $this->title = 'Javascript Tools';
        ob_start();
        include('View/JavascriptTools/index.php');
        $content = ob_get_clean();
        return $content;
    }

}
