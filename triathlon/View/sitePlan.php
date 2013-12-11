<?php
/*
 *
valid HTML and CSS
describe 14 content pages and organize them into meaningful groups or categories
Style Guide
     Topics
          color scheme
          typography
          navigation
          responsiveness
     Include detailed examples of each topic
     Sketch of the home page for desktop / tablet / smartphone
     Sketch of a content page for desktop / tablet / smartphone
Description
     Sections
          Site name
          Purpose
          Target Audience
          Persona
          Scenario
 */
?>
<h1>Site Plan</h1>
<hr>
<h2>Site Description</h2>
<h3>Name</h3>
<p>Novak Tools</p>
<h3>Purpose</h3>
<p>
    Novak Tools provides php and javascript tools and tricks that measure up to Novak standards.  The site provides solutions as easy as copying a line of code into your website
    while providing full-blown PHP and javascript plugins for accomplishing more complicated tasks.  The primary objective is to make a web developer's job a little easier.
</p>
<h3>Target Audience</h3>
<p>
    While Novak Tools is useful for web developers of any skill set, the target audience consists of simple website creators and PHP novices.
</p>
<h3>Persona</h3>
<p>
    <span class="strong">Jane Marks</span> is a 38 year old mother of 3 who has a full time job keeping computers running at a local high school.
    She takes on small website design jobs as a freelancer.  She has a good mind for graphic design and making things look good, but her coding skills need some polishing.
</p>
<p>
    <span class="strong">Dave Kimball</span> is a 24 year old college student who has always enjoyed computers and recently started tinkering around with building websites using
    php.  He has created a one-page php application following an online tutorial, and he is keeping an eye out for small jobs he can get paid for using his growing php skills.
</p>
<h3>Scenarios</h3>
<p>
    <span class="strong">Jane Marks</span> has a client who uses a simple web form for generating project quotes for their customers.  They want the form to automatically calculate the
    order totals and display the total price on the screen before the customer clicks the "Order Now" button.  Jane knows that she can do this with javascript, but doesn't know how to
    write the code she needs.
</p>
<p>
    <span class="strong">Dave Kimball</span>'s neighbor runs a small business providing lawn care services around town.  He has a simple website, and he wants to add a "Sends us an Email"
    form to get more leads out of his website visitors.
</p>
<hr>
<h2>Content Pages</h2>
<ul>
    <li>PHP
        <ul>
            <li>Common pitfalls setting up your first php page</li>
            <li>Form to Email utility with installation guide embedded as a youtube video</li>
            <li>Form to SMS utility with installation guide embedded as a youtube video</li>
            <li>How to work with timezones in php</li>
            <li>Get latitude and longitude of a given address from the Google Maps API</li>
        </ul>
    </li>
    <li>Javascript
        <ul>
            <li>Basic tips to understand existing javascript code</li>
            <li>Why you should be using jQuery</li>
            <li>Form totaler utility</li>
            <li>iframe resizer utility</li>
            <li>HTML5 ajax file uploading</li>
            <li>Basics of event handling with jQuery</li>
        </ul>
    </li>
</ul>
<hr>
<h2>Style Guide</h2>
<p>
    My primary goal is to maintain organized and highly readable CSS code.  In previous projects my CSS always turns into a huge mess and it is impossible to follow.
    For this site, I will separate out Layout, Appearance, and specific styling into separate sections in the CSS file in an attempt to better organize my CSS code.
</p>
<h3>Color Scheme</h3>
<p>
    The site takes it's color scheme from the blue elephant image in the header.  The blue color is defined as #69B2FB and the contrasting color as #7D4F0D.
    Tones and shades of both colors can be utilized throughout the site as the font color in order to provide additional contrast and definition.
    Links are given the color #0E457B by default and are changed to #6583A0 when they have been visited or when the mouse is hovering over them.<br>
    The specific tones and shades will be modified as I seek a more unified appearance in the site design.
</p>
<h3>Typography</h3>
<p>
    Any serif font can be used for heading level text.
    Any sanf-serif font can be used for body text.
</p>
<h3>Navigation</h3>
<p>
    The Nav Bar in the header will provide links to the main pages. The principal categories (PHP and Javascript) will expand on mouse over or mouse click (to provide functionality on
    touch screens) and content pages of each category will be clickable directly from the fold-out that appears.<br/>
    The footer will contain the complete site map, with link to each page organized by category.
</p>
<h3>Responsiveness</h3>
<p>
    The site will utilize percentage based layout definitions and em defined font sizes to improve responsiveness on different devices.
    Nav areas will be tested on desktop, smartphone, and tablet devices in order to ensure easy operability between platforms.
</p>
<h3>Layout Sketches</h3>
<ul>
    <li><a href="/img/site_plan/browser_sketch.png" class="colorbox">Browser Home Page</a></li>
    <li><a href="/img/site_plan/browser_content_sketch.png" class="colorbox">Browser Content Page</a></li>
    <li><a href="/img/site_plan/android-tablet-small_sketch.png" class="colorbox">Tablet Home Page</a></li>
    <li><a href="/img/site_plan/android-tablet-small_content_sketch.png" class="colorbox">Tablet Content Page</a></li>
    <li><a href="/img/site_plan/android-phone-small_sketch.png" class="colorbox">Small Phone Home Page</a></li>
    <li><a href="/img/site_plan/android-phone-small_content_sketch.png" class="colorbox">Small Phone Content Page</a></li>
</ul>
