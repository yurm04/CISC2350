# Loops
Loops are another type of control structure in PHP. They are similar to conditional statements in the way that they execute a block of code when the specified condition is `TRUE`. However, where they truly come to benefit us is in the fact that they allow us to run the same block of code over and over again until a condition changes to `FALSE`. There are a few different types of looping mechanisms in PHP and we’ll discuss them in further detail below.

**IMPORTANT** - It is very important that the condition being evaluated in a loop *eventually* change to `FALSE` in order to prevent an infinite loop. An infinite loop is one that does not stop looping.

## [`while`](http://php.net/manual/en/control-structures.while.php) loop
The `while` loop in PHP allows you to repeatedly execute a block of code, as long as your loop condition evaluates to `TRUE`.  The value of the condition gets checked each time at the start of the loop.  *We must update the value of the condition each time the contents of the loop are executed to ensure we avoid running our `while` loop forever.*

```
// psuedocode

while (expressionThatEvaluateToBoolean) {
	// do something over and over until the expression evaluated is no longer true
}
```

Here is an example of a while loop.

```php
// start off with a count of 0
$count = 0;

// create my while loop and evaluate the condition of my count variable
while ( $count <= 10) {
	// print out the current count
	echo "$count ";

	// MAKE SURE TO UPDATE THE VALUE THAT I AM EVALUATING TO AVOID AN INFINITE LOOP
	$count++;
}
```

## [`do-while`](http://php.net/manual/en/control-structures.do.while.php) loop
A `do-while` loop is essentially the same as a `while` loop with the difference being that the condition is checked at the *end* of the loop iteration, not at the beginning as in the case with the while loop. This ensures that a `do-while` loop is going to run *at least* one time.

```
// psuedocode
do {
	// do something at lease once and repeat until condition is FALSE
} while (expressionThatEvaluateToBoolean);
```

Here is an example of a `do-while` loop:

```php
// start off with a count of 0
$count = 0;

// start my loop, and execute the loop code FIRST
do {
	// echo out the current count
	echo "$count ";

	// MAKE SURE TO UPDATE THE VALUE THAT I AM EVALUATING TO AVOID AN INFINITE LOOP
	$count++;

	// evaluate the expression.  If condition is FALSE, end the loop. If not FALSE, continue with loop
} while ($count <= 10);
```

## [`for`](http://php.net/manual/en/control-structures.for.php) loop
`for` loops are very common in many programming languages. They are also similar to `while` loops, but we have a lot more control over
how they behave.

```
// psuedocode
for (initializeExpression; conditionExpression; eachExpression) {
	// do something here
}
```

Unlike the other loops we've seen, the `for` loop contains 3 different expressions that we include.

1. Initialization - start off by initializing a variable or expression.  This will be the expression we check in the condition and update with each iteration of the loop
	
	```
	// initialization expression
	for ($count = 0; conditionExpression; eachExpression) {
		// do something here
	}
	```

2. Condition - set the condition that will be evaluated in our loop.  The condition should evaluate the initialized expression of the `for` loop.

	```
	// condition expression
	for ($count = 0; $count <= 10; eachExpression) {
		// do something here
	}
	```

3. Each - Update the value being evaluated with each iteration of the loop

	```
	// each expression
	for ($count = 0; conditionExpression; $count++) {
		// do something here
	}
	```

Altogether, we get a `for` loop that looks like this:

```php
for ($count = 0; $count <= 10; $count++) {
	echo "$count ";
}
```

## [`foreach`](http://php.net/manual/en/control-structures.foreach.php) loop
A `foreach` loop behaves differently from each other loop we have discussed.  It is used specifically for easily looping through elements of an array.  There is *no* condition to check with each iteration of the loop, and there is no condition being checked to indicate when the loop should stop.  The loop will iterate through all of the contents of the array, and know when to stop the loop itself.

```php
foreach ($array as $value) {
	// do something
}
```

In the `foreach` loop above, `$array` is the array that will be iterated over.  The element currently being iterated over in the array is assigned to the variable `$value` and is available in the block of code being executed.  The `$value` variable can be named whatever you want, and will be updated with the value of the next array element with each iteration.

```php
$languages = array("HTML", "CSS", "PHP");
// for each element of the $languages array, echo out the language as a list item
foreach ($languages as $language) {
	echo "<li>$language</li>";
}
```

Using a `foreach` loop with an associative array is a bit different because we have to account for the key and the value. Here is what the basic structure looks like:

```
foreach ($array as $key => $value) {
	// do something
}
```

For the associative array `foreach` loop, there is still the `$array` variable that is the array to iterate over.  Next, there is th `$key` variable that gets assigned the value of the current element's `key`.  Finally, the `$value` variable once again contains the current element's value.

```php
$languages = array("markup" => "HTML", "stylesheet" => "CSS", "programming" => "PHP");
// for each element of the $languages array, echo out the language and language type.
foreach ($languages as $type => $name) {
	echo "The $type language we learned is $name";
}
```

## `continue` and `break`
There are two special keywords that we can use inside of the loops we have learned.

### [`continue`](http://php.net/manual/en/control-structures.continue.php)
`continue` let's you skip the rest of the current loop iteration and *continue* execution at the condition evaluation and then the beginning of the next iteration.

```php
$languages = array(
	"markup" => "HTML",
	"database" => "MySQL",
	"stylesheet" => "CSS",
	"programming" => "PHP"
);

// for each element of the $languages array, echo out the language and language type.
foreach ($languages as $type => $name) {
	// we haven't learned a database language yet, so let's skip with the continue keyword
	if ($type === 'database') {
		// don't execute the rest of the code block, just go on to the next iteration
		continue;
	}

	echo "<li>The $type language we learned is $name</li>";
}
```

### [`break`](http://php.net/manual/en/control-structures.break.php)
The `break` keyword allows us to break completely out of the entire loop. It stops the entire process.


```php
$lights = array("green", "green", "green", "red", "green", "green", "green");

foreach($lights as $light) {
	$command = ($light === 'green') ? 'GO' : 'STOP';

	echo '<p style="color:' . $light . ';">' . $command . '</p>';

	// if the command is equal to 'STOP', break out of the loop and stop iterating
	if ($command === 'STOP') {
		break;
	}
}
```


___

[Next - Functions »](2-Functions.md)

[« Back - Intro](README.md)
