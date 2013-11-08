<?php

class PhpTools extends BaseController{

    public function index(){
        $this->title = 'PHP Tools';
        ob_start();
        include('View/PhpTools/index.php');
        $content = ob_get_clean();
        return $content;
    }

    public function basics(){
        $this->title = 'PHP Basics';
        ob_start();
        include('View/PhpTools/basics.php');
        $content = ob_get_clean();
        return $content;
    }

    public function formToEmail(){
        $this->title = 'PHP Form to Email';
        ob_start();
        include('View/PhpTools/formToEmail.php');
        $content = ob_get_clean();
        return $content;
    }

    public function formToSms(){
        $this->title = 'PHP Form to SMS';
        ob_start();
        include('View/PhpTools/formToSms.php');
        $content = ob_get_clean();
        return $content;
    }

    public function timezones(){
        $this->title = 'PHP Timezones';
        ob_start();
        include('View/PhpTools/timezones.php');
        $content = ob_get_clean();
        return $content;
    }

    public function coordinates(){
        $this->title = 'PHP Coordinates';
        ob_start();
        include('View/PhpTools/coordinates.php');
        $content = ob_get_clean();
        return $content;
    }

    public function arrayBasics(){
        $this->title = 'PHP Array Basics';
        ob_start();
        include('View/PhpTools/arrayBasics.php');
        $content = ob_get_clean();
        return $content;
    }

}
