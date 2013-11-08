<h1>Working with Timezones</h1>
<p>
    Working with timezones can be a huge hassle for a web developer.  <br/>
    Say you are building a web application for a dentist to allow his clients to schedule an appointment online. <br/>
    The dentist is in Texas, you are on the East Coast, and the server is hosted by a data center located in Oregon.
    Which time-zone is PHP going to use? How are you going to make sure that all of the appointments are scheduled for the right time-zone and that the daily reports of scheduled appointments show the right time?
</p>
<h2>Unix time</h2>
<p>
    As a PHP developer, you must understand Unix time.  Unix time is a count of the number of seconds that have passed since midnight of the night of 31 December 1969, UTC.
    Being defined in a single time-zone, you can use Unix time to store and manipulate dates and times regardless of timezone, and then convert to the necessary timezone at the end.
</p>
<h2>Date and Time Functions</h2>
<p>
    These functions your best friends -
    <dl>
        <dd>strtotime($time_as_text)</dd>
            <dt>Pass in any human-readable date or time reference (you can even pass in "5 minutes ago" or "next Sunday") and this function returns that time as a Unix timestamp.</dt>
        <dd>date($format, $time)</dd>
            <dt>
                The date() function lets you get the current date in any format, or pass in a Unix timestamp (usually made by using strtotime()) and get the date for any time you want!<br/>
                Take a look at the <a href="http://us2.php.net/manual/en/function.date.php">PHP documentation</a> to see how to format the date.
            </dt>
       <dd>
           date_default_timezone_set()
       </dd>
            <dt>Set the timezone for the date() function to calculate to.  Since a Unix timestamp is always in UTC, you can convert to and from timezones by using this function in conjunction with strtotime() and date().</dt>
    </dl>
</p>
<h2>How you can do it</h2>
<pre>
    $date = '15 March 2014';
    $time = '5:00pm';
    $timezone = 'America/New_York';
    $targetTimezone = 'America/Los_Angeles';
    date_default_timezone_set($timezone);
    $unixTime = strtotime($date . ' ' . $time);
    date_default_timezone_set($targetTimezone);
    $newDate = date('d m Y', $unixTime);
    $newTime = date('h:i', $unixTime);
</pre>