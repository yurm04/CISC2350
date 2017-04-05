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

