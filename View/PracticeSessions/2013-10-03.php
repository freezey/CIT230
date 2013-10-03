<h1 class="text-center">Styling the website</h1>
<h2>Objective:</h2>
<p>Create a flexible layout with organized CSS and make it look pretty</p>
<hr>
<h2>What I did</h2>
<ul>
    <li>Stuck the footer to the bottom of the page</li>
    <li>Decided on a logo and color theme</li>
    <li>Set site colors and gradient styling</li>
    <li>Create the top nav bar</li>
</ul>
<hr>
<h2>How I did it</h2>
<h3>Footer</h3>
<p>
    I basically followed the instructions on this page: <a href="http://www.cssstickyfooter.com">http://www.cssstickyfooter.com/</a><br>
    The basic page structure looks like this:
    <pre><?php echo htmlspecialchars('
        <body>
        <div id="BodyContainer">
            <header>
                <div id="Header">

                </div>
            </header>

            <main>

            </main>
        </div>
        <div id="FooterContainer">
            <footer>

            </footer>
        </div>
        </body>
        ');?>
    </pre>

    By separating the header / main elements and the footer elements into separate div containers, I am able to use CSS rules to fix the footer to the bottom of the page and still allow the page content to expand and scroll as necessary.
    <br/>
    Here's the accompanying CSS:
    <pre>
        main{
            overflow: auto;
            padding-bottom: 150px;
        }
        div#FooterContainer{
            margin: -150px auto 0px auto;
            height: 150px;
            width: 800px;
            clear:both;
        }

    </pre>
</p>
<h3>Colors</h3>
<p>I did some research on choosing color themes and decided to find a logo image to base my colors off of.</p>
<p>I have never been good with colors and graphic design... If you have any suggestions let me know</p>
<h3>Gradients</h3>
<p>I used <a href="http://gradients.glrzad.com/">this tool</a> to find my colors and get the CSS code for the gradients used.</p>
<h3>Nav Bar</h3>
<p>I like horizontal nav bars on web pages. For me they are obvious, intuitive, and easy to use.</p>
<p>My nav bar is a <?=htmlspecialchars("<ul>")?> element styled to float the <?=htmlspecialchars("<li>")?> next to teach other with just a little space in between.</p>
<p>A couple height and padding rules in the CSS and voila, a horizontal nav bar!</p>