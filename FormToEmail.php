<?php
$string = 'POST Data:' . "\n";
$string .= processData($_POST);
$string .= "\n" . 'GET Data:' . "\n";
$string .= processData($_GET);

function processData($data, $prefix = ''){
    $string = '';
    foreach ($data as $key => $value){
        if (is_array($value)){
            $string .= processData($value, $key . '.');
        } else {
            $string .= $prefix . (string)$key . '=' . $value . "\n";
        }
    }
    return $string;
}

file_put_contents('post.txt', $string);
mail($_POST['recipient_email'], 'Your Form Data', $string);

?>

Now go check your email!