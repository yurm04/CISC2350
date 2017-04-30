# Assignment 8
This week's assignment will be building on assignment 7 and incorporate the use of loops and functions.  You will need the same [Academic Progress](http://216.230.117.32/section10/section184/section193/index.html) chart from last week to complete the assignment.

## Part 1: Functions
Using the logic you built last week for determining a student's classification, create a function that:

- is called `get_student_year`.
- Accepts one parameter:  the number of credits a student has earned
- Using the credits passed to the function, will calculate and return what year the student is classified as.

Create a second function called `get_grad_credits` that:

- accepts one parameter: the number of credits a student has earned
- Calculates and returns the number of credits left to earn in order to graduate from Fordham

Create a third function called `get_next_level` that does the following:

- accepts the number of credits a student has earned
- Returns a data structure that contains _both_ the number of credits needed to move up to the next classification, and the next classification that the student can move up to

## Part 2: Loops
Using the functions you have created in part 1 use the following data to print out each student's:

- name (in proper case - first letter of name capitalized)
- credits earned
- credits needed to graduate
- classification year
- the next classification to move up to (or graduate)
- the number of credits needed to move up to the next classification

Make sure to do the above **ALL WITHIN A LOOP** (don't just manually print out each name and associated data).  Use the below data structure containing student information as your source (copy and paste it exactly into your code).

```php
$students = array(
	'rick' => 124,
	'morty' => 24,
	'summer' => 48,
	'beth' => 75,
	'jerry' => 32,
	'bird_person' => 97
);
```

## Part 3: Built-in Functions
Use 2 built-in PHP functions in your program to format your content correctly.  **HINT** The names of your students should follow proper casing and should not contain special characters (`_` or `-`).  Use built-in functions to ensure that your student names meet this requirement.

## Grading Breakdown
- Part 1: 35pts
- Part 2: 35pts
- Part 3: 10pts
- Semantically correct HTML: 10pts
- Error free PHP: 10pts
