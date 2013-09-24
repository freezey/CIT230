<?php

class BaseController{
    public $action;
    public $params;


    public function __construct($params){
        if (!empty($params)){
            if (method_exists($this, $params[0])){
                $this->action = array_shift($params);
                $this->params = $params;
            }
        } else {
            $this->action = 'index';
            $this->params = $params;
        }

    }

    public function _render(){
        $this->title = $this->action;
        return call_user_func_array(array($this, $this->action), $this->params);
    }

    public function index(){
        return '';
    }
}