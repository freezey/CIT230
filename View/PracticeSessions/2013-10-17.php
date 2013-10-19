<h1 class="text-center">First run at laying out "All about HTML forms" page</h1>
<h2>Objective:</h2>
<p>Show how to use HTML forms and how the data is passed to the server for processing</p>
<h2>What is a form?</h2>
<p></p>

<h2>Form Elements</h2>
<h3>Form attributes / options</h3>
<h3>Input types</h3>
<ul>
    <li>Text</li>
    <li>Select</li>
    <li>Radio</li>
    <li>Checkbox</li>
    <li>Number</li>
    <li>Email</li>
    <li>Phone</li>
    <li>Hidden</li>
</ul>
<h2>Data Methods</h2>
<h3>GET method</h3>
<p></p>
<h3>POST method</h3>
<p></p>
<h3>How to get the data in a PHP file</h3>
<p></p>
<h4>Example PHP file</h4>
<pre>
    <?=htmlspecialchars('<?php
        $string = "";
        foreach ($_POST as $key => $value){
            $string .= $key . "=" . $value . "\n";
        }
        file_put_contents("post.txt", $string);
    ?>');?>
</pre>