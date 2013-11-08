<?php

class JavascriptTools extends BaseController{

    public function index(){
        $this->title = 'Javascript Tools';
        ob_start();
        include('View/JavascriptTools/index.php');
        $content = ob_get_clean();
        return $content;
    }

    public function basics(){
        $this->title = 'Javascript Basics';
        ob_start();
        include('View/JavascriptTools/basics.php');
        $content = ob_get_clean();
        return $content;
    }

    public function jquery(){
        $this->title = 'jQuery';
        ob_start();
        include('View/JavascriptTools/jquery.php');
        $content = ob_get_clean();
        return $content;
    }

    public function formTotaler(){
        $this->title = 'Form Math';
        ob_start();
        include('View/JavascriptTools/formTotaler.php');
        $content = ob_get_clean();
        return $content;
    }

    public function iframeResizer(){
        $this->title = 'iFrame resizing';
        ob_start();
        include('View/JavascriptTools/iframeResizer.php');
        $content = ob_get_clean();
        return $content;
    }

    public function ajax(){
        $this->title = 'Ajax Basics';
        ob_start();
        include('View/JavascriptTools/ajax.php');
        $content = ob_get_clean();
        return $content;
    }

    public function events(){
        $this->title = 'Events';
        ob_start();
        include('View/JavascriptTools/events.php');
        $content = ob_get_clean();
        return $content;
    }
}
