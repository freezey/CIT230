<h1>Creating a modular PHP framework - 2013-09-24</h1>
<h2>Objective:</h2>
<p>Create a modular php framework for use with my website for CIT230 class at BYU-Idaho</p>

<h3>Requirements</h3>
<ul>
    <li>URL rewriting (format: Controller/Action/param1/param2/etc)</li>
    <li>
        Modular view files
        <ul>
            <li>Master layout, header, and footer in separate files</li>
            <li>Automatically drop content from Controller action into master layout</li>
            <li>Standard way to insert "element" based view pieces</li>
        </ul>
    </li>
    <li>HTML5 compliant</li>
    <li>CSS3 compliant</li>
    <li>No database connections</li>
</ul>

<h3>How I did it</h3>
<h4>URL Redirection</h4>
<p>There are two pieces to the URL redirection. First is the .htaccess file.
    The .htaccess file contains instructions for how Apache (the webserver) should serve the content.
    The magic line looks like this: <br />
    RewriteRule ^(.*)$ /index.php?url=$1 [QSA,L]<br />
    That tells the server to send every request ("^(.*)$") and send it to /index.php, putting the request URL on the end as a GET variable
</p>
<p>
    The second piece is setting up index.php to get the URL information, parse it, and call the right controller action.
    The core of my code to accomplish this is as follows:
    <pre>if (isset($_GET['url'])){
    $url = $_GET['url'];
} else {
    $url = 'Home';
}
$url = explode('/', $url);
$controller = ucfirst(array_shift($url));
$params = $url;
</pre>
</p>
<h4>Modular view files</h4>
<p>
    This one is a bit easier.  Inside the base php files or classes that call the view files, I prepare each section and put the view data into variables.
    Then the main layout file just needs to be a bare shell with correct page elements and containers. I simply echo the prepared php variables into the layout's containers.
</p>