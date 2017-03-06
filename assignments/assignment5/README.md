# Assignment 5
This week's assignment will focus on getting familiar with Git and GitHub branches, and making part of your resume website responsive.

## Part 1: Git branches
Make a copy of your `midterm` directory in your `assignments` repo.  Rename this copy `assignment5`.  This will act as the base for your assignment.  From the command line, create a new branch from `master` and name it `assignment5`.  On your new `assignment5` branch, you will continue the work for part 2 of this assignment.  When you are ready to submit, make sure you commit and push your new `assignment5` branch up to your GitHub.  The deliverables for this part are

- New `assignment5` branch created from `master` pushed up to GitHub.
- Your `assignment5` branch should contain all of the changes that will go into part 2 of this assignment (responsive web development).
- Submit the URL of your `assignment5` branch - pointing to the main `assignment5` directory - to BlackBoard.

## Part 2: Responsive web page
The second part of this assignment will be to build on your resume website to make it partially responsive.  Using the techniques covered this week, make your main resume page responsive.  This includes properly sizing fonts and images based on device size, and creating accessible layouts for your content.  Deliverables for this part are:

- **AT LEAST** your main resume page from your website should be responsive.
- Mobile first development.  This means your base styling should be focused on global and mobile, and your media queries will cover larger screen sizes.
- At least 2 media queries used.

	```
	@media only screen and (min-width: 768px) {
		/*
			styling for screens at least 768px wide
			e.x. many tablets
		 */
	}

	@media only screen and (min-width: 1020px) {
		/*
			styling for screens at least 1020px wide
			e.x. laptops or desktops
		 */
	}
	```

## Grading Breakdown
- 30pts Part 1
- 70pts Part 2

## Due Date
Due at your next class (1 week) before your scheduled class time.