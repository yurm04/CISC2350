# Functions
In many cases, we will write code that we want to use multiple times or in different places. Functions are simply a name we give to a
block of code. These are not new to PHP; they are available in many programming languages.  There are two general categories of functions:

- Built-in or language provided:  These functions are provided by PHP. PHP has over 1000 predefined functions that we can use in our programs.
- User-defined: We, the programmers, can also create custom functions. We can wrap a code block of any type in a function and then use the function as we need to. It saves a great deal of time and can help reduce troubleshooting time.

We will end up using a lot of functions in our PHP code - both built in and user defined.  You can find a list of all built-in PHP functions [here](http://php.net/manual/en/indexes.functions.php)

There are built-in functions that handle strings, arrays, errors, dates, times, and so much more.  To see a list of built-in PHP functions by type, section, or topic visit [this link](http://php.net/manual/en/funcref.php).

## User defined functions
In this section we are going to create (declare) our own functions, and then use (call) these functions in our programs.  The basic structure of a function looks like:

```php
function your_function_name() {
	// your function code here
}
```

Let's break down the basic structure piece by piece

1. Start off by indicating you are creating a function by using the special keyword `function`.
2.  After the `function` keyword, you must give your function a name.  The naming rules for functions are pretty much the same as PHP variables, but function names don’t need to be preceded with a dollar sign.
3. A function can also take parameters that are passed via the parenthesis after the function name.  More on parameters soon.
4. Finally, we have the curly braces that contain the function code the function will be executing when called.

Let's take a look at our first function:

```php
function say_hello() {
	echo "Hello, World!";
}
```

Now that we have declared a function, we can use it in our code whenever necessary, without having to duplicate the code being executed by the function.  We can use our variable by calling it in our code (see below).  Until you call a function in your program, it won't actually execute any of its code.

```php
// declare the function
function say_hello() {
	echo "Hello, World!";
}

// call the function
say_hello();

// ...Do some other stuff in our code

// call the function again
say_hello():
```

The above function is just fine, but it is a bit static.  We can make our functions more dynamic by passing them information that they can then use in the function execution.  We do this by specifying the *parameters* a function can accept when declared, and passing it *arguments* when the function is called.  A parameter is just like a variable: it has a name that you give it, and it can be used in the function code you create.

```php
// declare the function
function say_hello($name) {
	// greet the person whose name was passed
	echo "Hello, $name!";
}
```

To provide the function the information it will use in its code execution, we pass it the arguments when calling the function.

```php
// declare the function
function say_hello($name) {
	// greet the person whose name was passed
	echo "Hello, $name!";
}

// call the function, and pass it the argument that corresponds with the parameter declared.
say_hello('Yuraima'); // Hello, Yuraima!
```

Functions can take multiple arguments by providing a comma separated list of parameters at function declaration.  When passing the arguments to our function call, the order of your function arguments corresponds to the order of the function parameter when declared.

```php
// Your function can take multiple parameters as a comma separated list.  Order matters for parameters when passed
function custom_greeting($greeting, $name) {
	echo "<p>$greeting, $name</p>";
}

// call the function, and pass it the argument that corresponds with the parameter declared.
custom_greeting('Hello', 'Yuraima');

// don't forget, order matters when passing your arguments to your functions
custom_greeting('Howdy', 'partner');

custom_greeting('Wassup', 'losers');
```

Functions can accept a number of different data types and data structures as arguments (strings, integers, arrays, etc.). Functions can even accept other functions as arguments. You can create very simple or very complex functions using what you have learned in this section.

## Returning a value
It is often helpful for a function to return a value when called. One purpose of this is to use the value that is returned by the function and assign it to a variable that can be used later on. Here is an example of returning a value from a function:

```php
// function returns a value when it is called using the 'return' keyword
function get_full_name($first_name, $last_name) {
	$full_name = "$first_name $last_name";

	return $full_name;
}
```

By using the keyword `return` and the value we want returned from our function, we can have our functions return something when called.

```php
// function returns a value when it is called using the 'return' keyword
function get_full_name($first_name, $last_name) {
	$full_name = "$first_name $last_name";

	return $full_name;
}

// the function return value is then saved to the variable
$name = get_full_name('Princess Consuela', 'Bananahammock');

// and we can use the variable elsewhere in our code
custom_greeting('Hello', $name); // Hello, Princess Consuela Bananahammock
```

## Built-in functions
Along with user defined functions, PHP has many built-in functions available for use.  Using built-in functions is no different than using our own functions: they still excute some block of reusable code, can take arguments, and return values when called.  Let's take a look at a built-in PHP function, [`ucwords`](http://php.net/manual/en/function.ucwords.php).

```php
// should return the first and last name, with proper casing
function get_proper_name($first_name, $last_name) {
	$full_name = "$first_name $last_name";
	
	// using the built-in php function we can upper case the name and get the return value.
	$proper_case = ucwords($full_name);
}

$name = get_proper_name('yuraima', 'estevez');
echo $name; // Yuraima Estevez
```

When using built-in functions, make sure you know exactly what you expect the function to do, the arguments it can take, and the return values it provides (if any).  All of this information can be found in the official PHP documentation.  Below are a few useful functions and links to their documentation.  This list is only to give you a push in the right direction of where to start looking for functions, and getting familiar with the documentation.

- [`substr`](http://php.net/manual/en/function.substr.php)
- [`strlen`](http://php.net/manual/en/function.strlen.php)
- [`str_replace`](http://php.net/manual/en/function.str-replace.php)
- [`strtolower`](http://php.net/manual/en/function.strtolower.php)
- [`strtoupper`](http://php.net/manual/en/function.strtoupper.php)
- [`count`](http://php.net/manual/en/function.count.php)
- [`in_array`](http://php.net/manual/en/function.in-array.php)


___

[Next - Contributing to GitHub Projects »](3-Contributing.md)
[« Back - Loops](1-Loops.md)

