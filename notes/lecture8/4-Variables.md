# PHP Variables
A variable is symbolic representation for a value that can change overtime. You can compare variables in programming languages to variables in mathematics: they represent some value that can change, and then are used in statements.

```
x = 6

f(x) = x + 5
```

PHP variables can contain text, numbers, and many other types that we will discuss in the future.  To create a variable, we need to give our variable a name and assign it a value.  

```php
$name = "Yuraima";  // Text in programming are usually referred to as "strings"
$age = 26; // Numbers are referred as "integers"
$pi = 3.14 // Decimal numbers are "floats"
```

## Variable Names
There are some pretty specific rules for declaring variables in php:

- Variable names must start with a `$`.  This is how PHP knows you are making or referrencing a variable.
- The `$` can be followed by a letter or an underscored (e.x. `$name` and `$_name`).
- Variables can contain letters, numbers, underscores, and dashes.
- Variable names **cannot** contain spaces
	- For variable names with multiple words separate each word with an underscore `_`.
- They are case sensitive. $Name, $name, and $nAMe are all different variables.

There are some variable names that you cannot use, because PHP gives them special meaning.  These are known as *reserved words*, and a list of them can be found [here](http://php.net/manual/en/reserved.php). 

## Constant Variables
Normally, the value of a variable can change on the fly.

```php
<?
$name = "Yuraima";
echo $name; // prints "Yuraima" to the page

$name = "John";
echo $name; // We changed the value of $name, so now it prints "John"
?>
```

However, there will be times when we want our variable values to remain the same, and make sure that they cannot be changed.  In this case, we can declare a *constant*.  A constant is a variable that cannot be changed after it is declared and initialized.

```php
<?php
define("MY_NAME", "Yuraima");
echo MY_NAME; // the value of MY_NAME cannot be changed
?>
```

Creating constants differs slightly from regular variables:

- Constants don't need the `$` at the beginning of their name.
- They need to be in ALL CAPS.
- Constants must be declared and initialized using the [`define()`](http://php.net/manual/en/function.define.php) function. `define()` requires the name of your constant, followed by the value you are assigning it.


___

[Next - Errors »](5-Errors.md)

[« Back - Intro to PHP](3-PHP.md)


