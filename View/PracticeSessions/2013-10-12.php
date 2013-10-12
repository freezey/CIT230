<h1 class="text-center">Making a CURL call to Google Maps API</h1>
<h2>Objective:</h2>
<p>Use the Google Maps API to get the Latitude and Longitude of a given address</p>
<h2>How it works</h2>
<p>
    The Google Maps API provides ways to get information about physical locations, such as full address and latitude / longitude coordinates.
    The following code allowed me to query the Google Maps API from inside of a PHP script and return the latitude and logitude of the address.
</p>
<pre>
    public function _getLatLon($address){
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
</pre>
<h2>Try it out!</h2>
<?=isset($latLon) ? '<p>Latitude: ' . $latLon['latitude'] . '</p><p>Longitude: ' . $latLon['longitude'] . '</p>' : null?>
<form action="/Assessments/googleMaps" method="POST">
    <label for="AddressInput">Address</label><input type="text" name="address" id="AddressInput" value="<?=isset($_POST['address']) ? $_POST['address'] : null?>">
    <input type="submit" value="Look it up">
</form>
