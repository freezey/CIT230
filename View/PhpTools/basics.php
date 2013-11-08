<h1>Basic intro to PHP</h1>
<h2>What does PHP code look like?</h2>
<pre>
    $x = 2;
    $y = 3;
    $z = $x + $y;
    echo $z;
</pre>
<ul>
    <li>
        Variables
        <p>Variables in php always start with the "$" symbol.  A variable is a name that represents a value of some sort.  In the example above, $x represents the number 2</p>
    </li>
    <li>
        Operators
        <p>Operators are instructions for php to do something to the variables. $x + $y uses the operator "+" to add $x and $y together. Other operators include:
        <dl>
            <dt>-</dt>
                <dd>subtract</dd>
            <dt>*</dt>
                <dd>multiply</dd>
            <dt>/</dt>
                <dd>divide</dd>
            <dt>%</dt>
                <dd>modulus - returns the remainder after dividing (15 % 4 would return 3, the remainder of dividing 15 by 4)</dd>
        </dl>
        </p>
    </li>
    <li>Functions
        <p>PHP has lots of built-in functions that you can use. In our example above, we use the function (or in this case "language construct") "echo" to send the value of $z to the web-page.</p>
    </li>
</ul>