# Data Types
We have already seen a few different types of variables that PHP can support:

```php
$name = "Yuraima"; // string
$age = 26; // integer
$pi = 3.14; // float (AKA double)
```

Below are other data types that PHP has available.  PHP has other data types available not listed here, but these are the ones we will focus on for now.

## String
A sequence of characters such as: "I like PHP." They are typically contained in single quotes and double quotes, but there are other ways to represent them as well.

- Single quoted strings will display most things literally, meaning as they are written. Variables are not interpreted within single quoted strings.
- Double quoted strings do in fact interpret the variables contained within them.

```php
$name = "Yuraima";
$city = "New York";

// concatenation with the '.' operator
echo 'My name is ' . $name . ', I live in ' . $city;

// double quotes will interpret variable
echo "My name is $Yuraima, I live in $city";
```

### The concatenation operator `.`
The concatenation operator is a special character in PHP `.` used to combine strings.

```php
echo 'Hello' . ' World!'; // concatenating string literals
```

The concatenation operator can also be used to combine variables to create strings.

```php
$name = "Yuraima"; // string variable
$city = "New York"; // string variable

echo 'My name is ' . $name . ', I live in ' . $city;
```

If trying to concatenate integers or floats with strings, the concatenation operator will convert the non-string to a string automatically.

```php
$name = "Yuraima"; // string variable
$age = 26; // integer variable

echo 'My name is ' . $name . ', I am ' . $age . ' years old.';
```

## Integer
A whole number without a decimal point, like 10. They can hold positive or negative values.

```php
$age = 26;
$student_loan_debt = -1000000;
```

## Floats
A number with precision or with a decimal point: `3.14`. Floating-point numbers have limited precision.  These can be positive or negative in value.

```php
$price = 10.77; // cheese pizza and a large soda from Panucci's pizza, same as my pin number
$pi_precise = 3.14159265359;
```

## Boolean
These represent TRUE or FALSE. They can be represented as a literal and are not case-sensitive.

```php
$php_is_cool = TRUE; // NO QUOTES! booleans are not strings
$puppies_arent_that_cute = FALSE; // literally equates to the value FALSE
```

The boolean values TRUE and FALSE are also represented as the integers `1` and `0` respectively.

## NULL
This is a special variable that represents a variable with no value. It is not case sensitive.  A `null` value also equates to `FALSE`.

```php
$totally_empty = NULL;
$empty_not_case_sensitive = null;
```

## Arrays
An array is a *data structure* that can store multiple values in a single variable. These multiple values are referred to as _elements_ and each element is identified by an _index_ or _key_. You’ll often hear the term “key-value” pair. This refers to the matching sets of the key position and the value contained at that spot in the array. You can think of an array as a type of list.

*Note*: A data structure is a particular format for storing and organizing data.

There are three different types of arrays in PHP, let's discuss two for now.

### Indexed Arrays
Sometimes referred to as a numeric array, but this doesn’t mean that it only stores numbers. It means that the indices of the array are a number and values are stored and accessed in a linear manner. They can store anything like numbers, strings, etc.. The default array index starts at `0`.

```php
// this is how you declare and initialize an array
$languages_learned = array("HTML", "CSS", "PHP");

// you can access your array element using the index
echo $languages_learned[0]; // arrays start at 0
echo $languages_learned[1];
echo $languages_learned[2];

// you can also add to arrays by adding to the next array index
$languages_learned[3] = "MySQL";

// to add to the next index with specifying the number...
$languages_learned[] = "JavaScript";
```

### Associative Arrays
An associative array uses a string as the index. In this case, the index is known as a _named key_.

```php
$language_types = array("markup" => "HTML", "stylesheet" => "CSS", "programming" => "PHP");

// you can access your associative array elements using their keys
echo $language_types["markup"]; // HTML
echo $language_types["stylesheet"]; // CSS
echo $language_types["programming"]; // PHP

// you can also add to associative arrays by creating the key and value
$language_types["database"] = "MySQL";
echo $language_types["database"]; // MySQL
```


___

[Next - Operators »](2-Operators.md)

[« Back - Table of Contents](README.md)
