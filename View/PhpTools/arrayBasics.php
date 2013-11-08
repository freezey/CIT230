<h1>What is an array</h1>
<p>An array is an awesome way to work with variables.  Arrays are common to all of the major programming languages, but PHP lets you use them a little differently than most languages.</p>
<h2>A basic array</h2>
<p>
<pre>
    $foo = array('apple', 'orange');
</pre>
Will create an array with numeric indexes, it is the same as doing this:
<pre>
    $foo = array(0 => 'apple', 1 => 'orange');
</pre>
</p>
<p>The other option is an associative array:
<pre>
    $fruitColors = array('apple' => 'red', 'orange' => 'orange');
</pre>
This lets you not just group values together, but categorize them inside your array.
</p>
<p>PHP lets you store any variable type in an array:
<pre>
    $fruits = array(
        'apple' => array(
            'color' => 'red',
            'size' => 'medium',
            'state' => new FruitState(), //This is an object (or class) - you can find information about PHP objects <a href="http://php.net/manual/en/keyword.class.php">here</a>
        ),
        'orange' => array(
            'color' => 'red',
            'size' => 'big',
            'state' => new FruitState(),
        ),
    );
</pre></p>
<h2>Check out the videos below for more info</h2>
<h1>Numeric Arrays</h1>
<iframe width="420" height="315" src="//www.youtube.com/embed/8lJ4gl0qmDo" frameborder="0" allowfullscreen></iframe>

<h1>Associative Arrays</h1>
<iframe width="420" height="315" src="//www.youtube.com/embed/bzq0_VYtMkc" frameborder="0" allowfullscreen></iframe>
