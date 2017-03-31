# Arithmetic, Assignment, and Operators
PHP has a number of different operator groups. An operator is used to perform operations on operands in the form of variables and values.

## Arithmetic Operators

### `+`
Adds two operands

```php
$sum = 5 + 2; // 7
```

### `-`
Subtracts two operands

```php
$difference = 5 - 2; // 3
```

### `*`
Multiplies two operands

```php
$product = 5 * 2; // 10
```

### `/`
Divides the operand on the left by the operand on the right.

```php
$quotient = 5 / 2; // 2.5
```

### `%`
Returns the remainder after division

```php
$remainder = 5 % 2; // 1
```

### `**`
Raises the power of the operand on the left to the power of the operand on the right

```php
$product = 5 ** 2 // 25
```

## Assignment Operators

### `=`
Assignment operator where the variable on the left gets the value of the expression on the right

```php
$value = 5 + 2; // 7
$name = "Yuraima";
```

### `+=`
Adds the value on the left to the value on the right and assigns the result back to the value on the left

```php
$value = 5;
$value += 2; // same as $value = $value + 2
echo $value; // 7
```

### `-=`
Subtracts the value on the left to the value on the right and assigns the result back to the value on the left

```php
$value = 5;
$value -= 2; // same as $value = $value - 2
echo $value; // 3
```

### `*=`
Multiplies the value on the left to the value on the right and assigns the result back to the value on the left

```php
$value = 5;
$value *= 2; // same as $value = $value * 2
echo $value; // 10
```

### `/=`
Divides the value on the left to the value on the right and assigns the result back to the value on the left

```php
$value = 5;
$value /= 2; // same as $value = $value / 2
echo $value; // 2.5
```

### `%=`
Value on the left `%` value on the right and assigns the result back to the value on the left

```php
$value = 5;
$value %= 2; // same as $value = $value % 2
echo $value; // 1
```

## Incrementing and Decrementing Operators

### `++`

- Post-increment: used behind the value or variable `$var++`.  Returns the result, then increments the value by one
	```php
	$value = 5;
	echo $var++; // 5

	echo $var; // 6
	```


- Pre-increment: used in front of the value or variable `++$var`.  Increments value by one, then returns the result.

	```php
	$value = 5;
	echo ++$var; // 6

	echo $var; // 6
	```

### `--`

- Post-decrement: used behind the value or variable `$var--`.  Returns the result, then decrements the value by one
	```php
	$value = 5;
	echo $var--; // 5

	echo $var; // 4
	```


- Pre-decrement: used in front of the value or variable `--$var`.  Decrement value by one, then returns the result.

	```php
	$value = 5;
	echo --$var; // 4

	echo $var; // 4
	```
___

[Next - Comparison and Logical Operators »](3-ComLogOps.md)

[« Back - Data Types](1-DataTypes.md)
