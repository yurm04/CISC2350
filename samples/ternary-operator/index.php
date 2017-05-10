<!-- index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ternary Operator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Ternary Operator</h1>

    <p>The ternary operator is a special type of conditional operator. A statement using the ternary operator takes the form of:</p>

    <code><span class="blue">[Expression #1]</span> ? <span class="green"> [Expression #2]</span> : <span class="red">[Expression #3]</span>;</code>

    <p>Where:</p>

    <ul>
        <li><code class="blue">Expression #1</code> sets a condition that is either true or false;</li>
        <li><code class="green">Expression #2</code> is executed if the condition is true; and</li>
        <li><code class="red">Expression #3</code> is executed if the condition is false.</li>
    </ul>

    <h2>Example #1</h2>

    <p>At this point, recall the "if-else" statement, which consists of:</p>

    <ol>
        <li>An "if" statement, which is executed when the condition is true; and</li>
        <li>An "else" statement, which is executed when the condition is false.</li>
    </ol>

    <p><a href="https://github.com/yurm04/CISC2350/blob/master/notes/lecture9/4-Conditionals.md" target="_blank">Lecture #9</a> contains an example of an "if-else" statement that determines whether someone is old enough to drink beer:</p>

    <div class="snippet"><code><pre>

    $age = 20;

    <span class="blue">if ($age >= 21)</span> {
        <span class="green">print "You can drink legally! :)";</span>
    }

    else {
        <span class="red">print "Sorry, no beer for you. :(";</span>
    }
    </pre></code></div>

    <p>When we run the above code, we get:</p>

    <div class="result"><pre>

    <?php
    $age = 20;

    if ($age >= 21) {
        print "You can drink legally! :)";
    }

    else {
        print "Sorry, no beer for you. :(";
    }
    ?>

    </pre></div>

    <p>A ternary operator is essentially a shortcut for writing an "if-else" statement.</p>

    <p>Rewriting the drinking age "if-else" statement example using the ternary operator:</p>

    <ul>
        <li><code class="blue">Expression #1</code> would be whether the person's age is equal to or greater than 21 years old;</li>
        <li><code class="green">Expression #2</code> would display "You can drink legally! :)" if <code class="blue">Expression #1</code> is true; and</li>
        <li><code class="red">Expression #3</code> would display "Sorry, no beer for you. :(" if <code class="red">Expression #1</code> is false.</li>
    </ul>

    <p>Therefore, an example of the ternary operator that determins whether someone is old enough to drink beer would look like this:</p>

    <div class="snippet"><code><pre>

    $age = 20;

    <span class="blue">$age >= 21</span> ? <span class="green">print "You can drink legally! :)"</span> : <span = class="red">print "Sorry, no beer for you. :("</span>;
    </pre></code></div>

    <p>When we run the above code, we get the same result:</p>

    <div class="result"><pre>

    <?php
    $age = 20;

    $age >= 21 ? print "You can drink legally! :)" : print "Sorry, no beer for you. :(";
    ?>

    </pre></div>

    <p>As you can see (including white space), 9 lines of code written using an "if-else" statement is condensed into 3 lines of code written using an ternary operator.</p>

    <h2>Example #2</h2>

    <p>Here's another example of an "if-else" statement, which takes a number and returns the absolute value of that number:</p>

    <div class="snippet"><code><pre>

    $number = -12;

    <span class="blue">if ($number >= 0)</span> {
        <span calss="green">$absolute_value = $number;</span>
    }

    else {
        <span class="red">$absolute_value = -$number;</span>
    }

    echo "The absolute value of $number is $absolute_value.";
    </pre></code></div>

    <p>When we run the above code, we get:</p>

    <div class="result"><pre>

    <?php
    $number = -12;

    if ($number >= 0) {
        $absolute_value = $number;
    }

    else {
        $absolute_value = -$number;
    }

    echo "The absolute value of $number is $absolute_value.";
    ?>

    </pre></div>

    <p>And here's how we would use the ternary operator to condense the above "if-else" statements:</p>

    <div class="snippet"><code><pre>

    $number = -12;

    <span class="blue">$absolute_value = ($number >= 0)</span> ? <span class="green">$number</span> : <span class="red">-$number</span>;

    echo "The absolute value of $number is $absolute_value.";
    </pre></code></div>

    <p>When we run the above code, we get the same result:

    <div class="result"><pre>

    <?php
    $value = -12;

    $absolute_value = ($value >= 0) ? $value : -$value;

    echo "The absolute value of $number is $absolute_value.";
    ?>

    </pre></div>

    <p>In this example, we used the ternary operator to figure out the absolute value of a given number and then assign the result to the variable <code>$absolute_value</code>. And rather than using 7 lines of code (counting white space), this was accomplished using only 1 line of code.</p>

    <h2>Example #3</h2>

    <p>It's possible to "nest" (or, for readability, "stack") multiple ternary operators within each other. For example, let's take the following "if-else" statements:</p>

    <div class="snippet"><code><pre>

    $arg = "B";

    if ($arg == "R") {
        $exercise = "running";
    }

    elseif ($arg == "B") {
        $exercise = "biking";
    }

    elseif ($arg == "S") {
        $exercise = "swimming";
    }

    else {
        $exercise = "walking";
    }

    echo $exercise;
    </pre></code></div>

    <p>Note that we can also write the above series of "if-else" statements using a "switch" statement:</p>

    <div class="snippet"><code><pre>

    $arg = "B";

    switch ($arg) {
        case "R":
            $exercise = "running";
            break;
        case "B":
            $exercise = "biking";
            break;
        case "S":
            $exercise = "swimming";
            break;
        default:
            $exercise = "walking";
    }

    echo $exercise;
    </pre></code></div>

    <p>In both cases, when we run the code, we get:</p>

    <div class="result"><pre>

    <?php
    $arg = "B";

    switch ($arg) {
        case "R":
            $exercise = "running";
            break;
        case "B":
            $exercise = "biking";
            break;
        case "S":
            $exercise = "swimming";
            break;
        default:
            $exercise = "walking";
    }

    echo $exercise;
    ?>

    </pre></div>

    <p>When writing the above "if-else" / "switch" statements using ternary operators, we might be tempted to "stack" multiple ternary operators in the following fashion:</p>

    <div class="snippet"><code><pre>

    $arg = "B";

    $exercise = ( ($arg == "R") ? "running" :
                  ($arg == "B") ? "biking" :
                  ($arg == "S") ? "swimming" :
                                  "walking" );

    echo $exercise;
    </pre></code></div>

    <p>However, running this code would return "swimming" rather than "biking":</p>

    <div class="result"><pre>

    <?php
    $arg = "B";

    $exercise = ( ($arg == "R") ? "running" :
                  ($arg == "B") ? "biking" :
                  ($arg == "S") ? "swimming" :
                                  "walking" );

    echo $exercise;
    ?>

    </pre></div>

    <p>That's because the conditional operator in PHP is left associative. To avoid this, simply use the following template when "stacking" ternary operators:</p>

    <div class="snippet"><code><pre>

    $arg = "B";

    $exercise = $arg == "R" ? "running" :
               ($arg == "B" ? "biking" :
               ($arg == "S" ? "swimming" :
                              "walking" ));

    echo $exercise;
    </pre></code></div>

    <p>Running this code would return "biking", as expected:</p>

    <div class="result"><pre>

    <?php
    $arg = "B";

    $exercise = $arg == "R" ? "running" :
               ($arg == "B" ? "biking" :
               ($arg == "S" ? "swimming" :
                              "walking" ));

    echo $exercise;
    ?>

    </pre></div>

    <p>Whereas the "if-else" statements took 19 lines of code and the "stack" statement took 17 lines of code, using the ternary operator allowed us to achieve the same thing using only 8 lines of code!</p>

    <h2>Conclusion</h2>

    <p>The benefits of using the ternary operator is being able to write "if-else" logic more quickly and in fewer lines of code. This is particularly useful when dealing with simple "if-else" statements or "switch" statements.</p>

    <p>However, it might be impractical and hazardous to use the ternary operator for more complicated "if-else" logic, where "if-else" statements are nested within each other. (In such instances, it would also be impractical and hazardous to use a "switch" statement.)</p>

    <p>Another concern of using the ternary operator is readability, especially when using the ternary operator as shorthand for a "switch" statement. When nesting the ternary operator, "stack" them rather than squeezing everything in one line and pay attention to parenthesis use.</p>

    <p>Finally, when working in a group, make sure other members of your team are aware of and understand the ternary operator before you incorporate it into your code.</p>

    <h2>References</h2>

    <ul>
        <li><a href="http://us2.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary" target="_blank">PHP Manual: "Comparison Operators"</a></li>
        <li><a href="http://www.hackingwithphp.com/3/12/4/the-ternary-operator" target="_blank">Hacking with PHP: "The Ternary Operator"</a></li>
        <li><a href="https://en.wikipedia.org/wiki/%3F:#PHP" target="_blank">Wikipedia: Section 2.21: PHP in the entry on "?:"</a></li>
        <li><a href="https://www.youtube.com/watch?v=unsQiLqPVYE" target="_blank">Clever Techie: "PHP If Else Statement and Ternary Operator Tutorial"</a></li>
        <li><a href="https://davidwalsh.name/php-shorthand-if-else-ternary-operators" target="_blank">David Walsh: "PHP Shorthand If/Else Using Ternary Operators (?:)"</a></li>
    </ul>
</body>
</html>
