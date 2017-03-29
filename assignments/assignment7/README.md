# Assignment 7
Let's build on assignment 6 from last week to incorporate the new PHP features we have learned.  You will need the information found in Fordham's [Academic Progress](http://216.230.117.32/section10/section184/section193/index.html) page to complete this assignment.

## Part 1: Data types
- Put your favorite foods in an _indexed array_ and access the values from the array to display on the page.
- Put your classes in an _associative array_ and access the values from the array to display on the page.  The keys of your array should be the _course number_ and the value should be the _course name_ i.e.
	
	```
	CS101 => Introduction to Computer Science
	CS102 => Introduction to Computer Science II
	CS2350 => Information and Web Programming
	```

## Part 2: Arithmetic Operators
Complete the following, and make sure to display the variables on your page in proper HTML.

- Create a variable `$earned_credits` with the number of credits you have earned so far.
- Create a variable `total_credits` that contains the number of credits to graduate from Fordham (124).
- Using `earned_credits` and `total_credits`, calculate how many credits you need to graduate and save to a variable `credits_needed`.

## Part 3: Conditional Statements
Using the **Minimum Credit Completion Policy** chart found on Fordham's [Academic Progress](http://216.230.117.32/section10/section184/section193/index.html) page, the conditional statements we leared (if, else, elseif), and the credit variables created from part 2, complete the following and display on your page.

- Create a conditional statement that uses your earned credits to determine what year of classification you fall under (freshman, sophomore, junior, senior).  Display your classification with the string `I am classified as a YOUR_CLASSIFICATION_YEAR`.
- In the same conditional statement, calculate and display the number of credits you need to move into the next classification or to graduate (ex. `I need 24 credits to become a Junior`).
- Make sure you are including conditionals for all of the classification years, and not just the one that works for you specifically.  I will be checking to make sure that if I change the value of `earned_credits`, I will still get the correct values.

Example part 3 output for 30 earned credits:

```
I am classified as a sophomore.
I need 31 credits to become a Junior.
```

Your conditionals should go through the following checks:

```
	check if is a freshman
	if not a freshman check if sophomore
	if not a sophomore check if junior
	if not a junior is a senior
```

Feel free to use as many variables as you need, you are not limited to the variables specified above.

## Grading Breakdown
- Part 1: 25pts
- Part 2: 25pts
- Part 3: 30 pts
- Semantically correct HTML: 10pts
- Error free PHP: 10pts

