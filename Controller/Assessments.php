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

    public function form(){
        ob_start();
        include('View/PracticeSessions/form.php');
        $content = ob_get_clean();
        $this->title = 'HTML Forms';
        return $content;
    }

    public function googleMaps(){
        $address = $_POST['address'];
        $latLon = $this->_getLatLon($address);
        ob_start();
        include('View/PracticeSessions/2013-10-12.php');
        $content = ob_get_clean();
        $this->title = 'Practice Sessions - 12 Oct, 2013';
        return $content;
    }

    public function _getLatLon($address){
        $address = str_replace(' ', '+', $address);
        $url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=USA";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        $responseArray = json_decode($response, true);
        $latLon = array(
            'latitude' => $responseArray['results'][0]['geometry']['location']['lat'],
            'longitude' => $responseArray['results'][0]['geometry']['location']['lng'],
        );
        return $latLon;
    }
}