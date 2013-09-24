<?php

class Assessments extends BaseController{

    public function practicePlan(){
        ob_start();
        include('View/practicePlan.php');
        $content = ob_get_clean();

        $this->title = 'Practice Plan';
        return $content;
    }
}