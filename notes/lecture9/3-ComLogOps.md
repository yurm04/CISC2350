# Comparison and Logical Operators
Before moving on to the next section, it might be helpful to list out the different conditional and logical operators we will be reviewing.

## Comparison Operators
Comparison operators compare two different values to equate to a TRUE or FALSE outcome.

### `==` Equality operator
**Not assignment**.  Checks if two values are equal.  This of it as "_is equal to_".

```
1 == 2 // FALSE. 1 does not equal 2
1 == 1 // TRUE

$val1 = 1;
$val2 = 5;
$val3 = 1;

$val1 == $val5 // FALSE
$val1 == $val3 // TRUE
```

### `===` Identity operator
Like the equality operator, but also checks if the two values are _of the same type_.

```
1 == '1' // FALSE. The integer 1 is not identical to the string "1"
```

### `>` Greater than
Returns true if the value on the left is greater than the value on the right.

```
5 > 1 // TRUE
1 > 5 // FALSE
```

### `<` Less than
Returns true if the value on the right is greater than the value on the left.

```
5 < 1 // FALSE
1 < 5 // TRUE
```

### `>=` Greater than or equal
Returns true if the value on the left is greater than or equal to the value on the right.

```
5 >= 1 // TRUE
1 >= 5 // FALSE
5 >= 5 // TRUE
```

### `<=` Less than or equal
Returns true if the value on the right is greater than or equal to the value on the left.

```
5 <= 1 // FALSE
1 <= 5 // TRUE
1 <= 1 // TRUE
```

### `!=` Not equal
Returns true if the values on the left and right are not equal to each other.

```
5 != 1 // TRUE
1 != 1 // FALSE
5 != 5 // FALSE
```

### `!==` Not identical
Returns true if the values on the left and right are not identical.

```
5 !== 1 // TRUE
1 !== '1' // TRUE
5 !== 5 // FALSE
```

## Logical Operators

## `&&` And
Returns TRUE if the value on the left _and_ the value on the right are
TRUE.

```php
$isCute = TRUE;
$isNice = TRUE;
$isFunny = FALSE;

$isCute && $isNice // TRUE because both values are true
$isCute && $isFunny // FALSE because one of the values is false

$isCute && $isNice && $isFunny // FALSE because all of the values must be true
```

## `||` Or
Those two vertical lines are the pipe character on your keyboard. They
must be typed without a space in between the two. Returns TRUE if the value on the left _or_ the value on the right are TRUE.

```php
$isCute = TRUE;
$isNice = TRUE;
$isFunny = FALSE;
$isSmart = FALSE;

$isCute || $isNice // TRUE because both of the values are true
$isCute || $isFunny // TRUE because at least one of the values is true
$isSmart || $isFunny // FALSE because none of the values are trues

$isCute || $isNice && $isFunny // FALSE because all of the values must be true
```

## `!` Not
Returns TRUE if a value is _not_ TRUE. It makes it the opposite of it’s current value.

```
$isCute = TRUE;
!$isCute; // FALSE

$isNice = TRUE;
!$isNice; // FALSE

$isFunny = FALSE;
!$isFunny; // TRUE

$isSmart = FALSE;
!$isSmart; // TRUE;
```


___

[Next - Conditional Statements »](4-Conditionals.md)

[« Back - Operators](2-Operators.md)
