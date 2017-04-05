# Conditionals
Conditionals are a group of control structures in PHP. They help determine the flow of the program based on asking a question and getting an answer. Different code blocks are executed depending on the answer to that question. The types of questions we will be using are in the form of a Boolean expression, which evaluates to TRUE or FALSE.

## `if` Statement

```
if (expressionThatEvaluatesToBoolen) {
	// statements to execute
}
```

In the example listed above, `if` is the keyword, everything inside of our opening and closing parenthesis is the Boolean expression that must evaluate to TRUE or FALSE. We accomplish this through a variety of comparison and/or logical operators ([reviewed in the previous section](3-ComLogOps.md)).
Then start our code block with an opening curly brace. The opening curly brace starts a block of code. Include any statements that should be exectured after the opening curly brace.  Finally, to end the block of code we include the closing curly brace.  Let's take a look at a real `if` statement:

```php
$age = 21;

if ($age >= 21) {
	echo "You can legally Drink!";
}
```

## `else` statements
We can combine `if` statements with `else` statements in order to provide another outcome to our conditional in case the first condition was not met.

```php
$age = 20;

if ($age >= 21) {
	echo "You can legally Drink!";
} else {
	// this block of code is executed when the if statement is not executed
	echo "Sorry, no beer for you :("
}
```

## `elseif` statements
In addition to `if` and `else` statements, we have `elseif` statements.  `elseif` is the combination of an `else` and and `if` statement.  This means if the previous condition was not met (`else`) _and_ if the current condition _is_ met, then the code block can be run

```php
$age = 20;
$citizen = false;

if ($age >= 18 && $citizen) {
	echo "You can legally vote!";
} elseif ($age >= 18 && $citizen === FALSE) {
	echo "Sorry, you must be a citizen to vote";
} else {
	echo "Sorry, even though you are a citizen you must be 18 years old or over to vote";
}
```

## `switch` statements
Similar to an if statement, a switch statement is used to perform different sets of actions based on the result of a condition. A switch statement is useful when you want to compare a variable or expression with many different values and then execute a particular piece of code that is associated with a specific value. *It is important to note that with a switch statement condition, we are testing for equality. We are not making a comparison or checking for a Boolean value*.

The basic format of a `switch` statement looks like the following:

```php
// psuedocode
switch (value) {
	case value1:
		statement;
		break;

	case value2:
		statement;
		break;

	case value3:
		statement;
		break;

	default:
		statement;
}
```

The important keywords are

1. `switch` indicating that we are beginning our switch statement.  The `switch` command evaluates the expression in the set of parenthesis, followed by the open and close curly braces that contain the conditional cases.
2. `case` The value of the expression/variable (`value`) is compared to the value of each `case`.  If a `case` matches, the code that corresponds to it will be executed.
3. `break` let's our `switch` statement know when to finish executing the statements of the `case` that was run.  Make sure to end your `case` statements with the `break` keyword!  Without `break`, your code will continue to run to the next case statement block as well.
4. `default` (optional) if none of the cases are a match, then we can include a `default` case to be executed instead.

```php
$animal = 'dog';

switch ($animal) {
	case 'dog':
		echo "A group of dogs is called a pack";
		break;

	case 'otter':
		echo "A group of otters is called a romp";
		break;

	case 'porcupine':
		echo "A group of porcupine is called a prickle";
		break;

	case 'hyena':
		echo "A group of hyenas is called a cackle";
		break;


	default:
		echo "A group of animals is called Rose Hill Students";
}

/**
 * the sentence "A group of dogs is called a pack" will be displayed
 */
```


___

[« Back - Logical Operators](3-ComLogOps.md)


