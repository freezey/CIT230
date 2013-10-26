<h1 class="text-center">Emailing Form Data</h1>
<h2>Objectives</h2>
<ol>
    <li>Show how to get POSTed form data in PHP</li>
    <li>Compose and send an email containing the POST data</li>
</ol>

<h2>Getting form data</h2>
<p>
    PHP automatically interprets POST data (data from a form) and puts it into the global variable $_POST.  So all you have to do in order to access the data is look in the $_POST variable.
    <br/>
    The inputs elements in the HTML form have a "name" attribute that determines the name of the array index in PHP when the data is posted.
    <br/>
    For example: <br/>
    Data from an input like this: <code><?=htmlspecialchars('<input name="FirstName">')?></code> will have its data available in PHP as $_POST['FirstName']
</p>
<p>
    In order to ensure we get all of the POST variables we just need to loop through the POST like this:
    <pre>
    $string = 'POST:' . "\n";
    foreach ($_POST as $key => $value){
	    $string .= $key . '=' . $value . "\n";
    }
    </pre>
</p>
<p>
    It is also possible to include array designations inside the "name" attribute.<br/>
    For example:<br/>
    Data from an input like this: <code><?=htmlspecialchars('<input name="Contact[FirstName]">')?></code> will have its data availabe in PHP as $_POST['Contact']['FirstName'].
</p>
<p>
    In order to include all of the data from nested arrays created this way requires a more complex loop:
    <pre>
    $string = 'POST:' . "\n";
    $string .= processData($_POST);
    $string .= processData($_GET);

    function processData($data, $prefix = ''){
        $string = '';
        foreach ($data as $key => $value){
            if (is_array($value)){
                $string .= processData($value, $key . '.');
            } else {
                $string .= $prefix . $key . '=' . $value . "\n";
            }
        }
        return $string;
    }
    </pre>
</p>
<p>
    It is also possible to have GET data passed in along with POST data.<br/>
    GET data is data passed in on the URL itself.  The example code above also handles the GET data.
</p>

<h2>Sending the email</h2>
<p>
    There are many ways to send emails from PHP.  The simplest is the mail() function.<br/>
    The mail() function requires that the server be setup to send emails, and most web hosts provide mail() functionality.
</p>
<p>
    Here's the php code to make this happen using our $string variable constructed above.
    <pre>
        mail('recipient@example.com', 'Your Form Data', $string);
    </pre>
</p>

<h2>Try it out! Send yourself an email</h2>
<p>
    Just fill out the form below and then go check your email.
</p>
<form action="/FormToEmail.php" method="POST">
    <label for="RecipientEmail">Your Email address</label><input name="recipient_email" id="RecipientEmail"><br/>
    <label for="Name">Your Name</label><input name="name" id="Name"><br/>
    <label for="FavoriteCar">What is your favorite car?</label><input name="favorites[car]" id="FavoriteCar"><br/>
    <label for="FavoriteIceCream">What is your favorite Ice Cream?</label><input name="favorites[ice_cream]" id="FavoriteIceCream"><br/>
    <label for="Comments">Your Comments</label><textarea name="comments" id="Comments"></textarea><br/>
    <input type="submit" value="Submit">
</form>