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



