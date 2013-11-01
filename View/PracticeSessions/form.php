<h1 class="text-center">HTML Forms</h1>
<h2>What is a form?</h2>
<p>
    An HTML form is a way to get input from a site visitor and pass the data back to the server.
</p>

<h2>Form Elements</h2>
<h3>Form attributes / options</h3>
<h3>Input types</h3>
<dl>
    <dt>Text</dt>
        <dd>A regular text-box, nothing special about it</dd>
    <dt>Select</dt>
        <dd>A drop-down style select box</dd>
    <dt>Radio</dt>
        <dd>An either / or select method</dd>
    <dt>Checkbox</dt>
        <dd>Check on or Check off</dd>
    <dt>Number</dt>
        <dd>A text-box that only accepts numbers. Mobile devices will display a number pad instead of a keyboard for these inputs.</dd>
    <dt>Email</dt>
        <dd>A text-box that requires a valid email address. Mobile devices will usually include the @ symbol on the keyboard where it is easy to see for these inputs.</dd>
    <dt>Phone</dt>
        <dd>A text-box that requires a phone number.</dd>
    <dt>Hidden</dt>
        <dd>When you need to pass data to the server, but don't want the visitor to see the data. For example a Contact ID or Invoice ID on a payment form.</dd>
</dl>
<h2>Data Methods</h2>
<h3>GET method</h3>
<p>
    GET is awesome.  It lets you pass data to the server just by editing the URL. Have you ever noticed that when you go to www.lds.org the URL changes to "www.lds.org/?lang=eng"</br>
    That last bit, "?lang=eng" is a perfect example of a GET variable.  The server receives that data and knows that you want your language to be English.  Try changing the ?lang=eng to ?lang=spa.
    Suddenly you have the Spanish site, just because you changed the value of the "lang" variable that goes to the server.<br/>
    You can choose to have your form send data using GET, but then your site visitors will be able to see and edit ALL of the form data, even hidden fields. Most of the time, you are going to use POST.
</p>
<h3>POST method</h3>
<p>
    POST data gets to the server by riding on the request header.  The request header is what the browser first sends to the server to <span class="italics">request</span> a web page.
    <br/>
    Since the data is riding on the header, the site visitor never sees this data. It is hidden away where only tech gurus and the server itself can see it.
    <br/>
    You can even send entire files using the POST method.  This is how file uploads work, like when you upload a picture to Facebook.
    Your picture is sent to the server as a huge long line of POST data that the server receives so that it can attach it to your profile and share it with the world.
</p>
<h3>How to get the data in a PHP file</h3>
<p>
    So - how can YOU make use of an HTML form to collect some data?
    <br/>
    PHP automatically reads both POST and GET data and makes them available as <span class="italics">global variables</span>. A global variable is simply a variable that is always available.
    <br/>
    POST data is stored in the $_POST variable and GET data in the $_GET variable.  All you have to do is reference $_POST[$input_name] or $_GET[$variable_name] and you have your data.
</p>
<h3>Example</h3>
<h4>HTML Form</h4>
<form action="FormToEmail.php">
    <fieldset>
        <label for="RecipientEmail">Recipient Email</label><input type="email" name="recipient_email" id="RecipientEmail">
        <label for="FirstName">First Name</label><input type="text" name="first_name" id="FirstName">
        <label for="FavColor">Favorite Color</label>
        <select name="favorite_color" id="FavColor">
            <option value="Blue">Blue</option>
            <option value="Red">Red</option>
            <option value="Pink">Pink</option>
            <option value="That odd shade of purple that reminds you of the crazy old lady down the street">That odd shade of purple that reminds you of the crazy old lady down the street</option>
        </select>
        <label for="Phone">Phone Number</label><input type="Phone" name="phone" id="Phone">
        <input type="submit" value="Send That Email!">
    </fieldset>
</form>
<h4>The code</h4>
<pre>
    <?=htmlspecialchars('
    <form action="FormToEmail.php">
        <fieldset>
            <label for="RecipientEmail">Recipient Email</label><input type="email" name="recipient_email" id="RecipientEmail">
            <label for="FirstName">First Name</label><input type="text" name="first_name" id="FirstName">
            <label for="FavColor">Favorite Color</label>
            <select name="favorite_color" id="FavColor">
                <option value="Blue">Blue</option>
                <option value="Red">Red</option>
                <option value="Pink">Pink</option>
                <option value="That odd shade of purple that reminds you of the crazy old lady down the street">That odd shade of purple that reminds you of the crazy old lady down the street</option>
            </select>
            <label for="Phone">Phone Number</label><input type="Phone" name="phone" id="Phone">
            <input type="submit" value="Send That Email!">
        </fieldset>
    </form>
    ');?>
</pre>
<p>
    Try it out! Put in your info and send yourself an email.
</p>