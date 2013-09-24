<?php

class Assessments extends BaseController{

    public function practicePlan(){
        ob_start();
        include('View/practicePlan.php');
        $content = ob_get_clean();

        $this->title = 'Practice Plan';
        return $content;
    }

    public function practice($date){
        ob_start();
        include('View/PracticeSessions/' . $date . '.php');
        $content = ob_get_clean();
        $this->title = 'Practice Sessions - ' . date('d N, Y', strtotime($date));
        return $content;
    }
}