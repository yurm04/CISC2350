# CSS Selectors

## Combining Selectors
[Combining selectors](https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Combinators_and_multiple_selectors) is one way to achieve a more specific selection on HTML elements.  You have several options available to you when performing selector combinations, through *combinators*

![Available combinators formats](docs/combinators-table.png)

```css
/* style.css */

/* matches <p> elements with the class .body-text */
p.body-text {
	color: blue;
	background-color: red;
}

/* matches <li> elements that are descendents of a <ul> */
ul li {
	color: blue;
	background-color: red;
}

/* matches .message that are direct descendents of .main */
.main > .message {
	color: blue;
	background-color: red;
}

/* matches any <h3> elements that are the next sibling of an <h2> */
h2 + h3 {
	color: orange;
}

/* matches <h5> that are among the next siblings of an <h4> */
h4 ~ h5 {
	width: 100px;
}

```

## Psuedo Classes
A [psuedo class](https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Pseudo-classes_and_pseudo-elements#Pseudo-classes) is a keyword appended to a CSS selector using the `:` character to specify the style of an element *only when it's in a certain state*

```css
a {
	color: black;
	text-decoration: none;
}

/* the :hover psuedo class is active when you mouse over the selected element */
a:hover {
	color: orange;
	text-decoration: underline;
}

```
## Psuedo Elements
A [psuedo element](https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Pseudo-classes_and_pseudo-elements#Pseudo-elements) is similar to a psuedo class, but with one major distinction:
1. Psuedo elements use the `::` characters before their keyword.
2. They select a certain part of the matched element.

```css
/* Adds the right arrow after the element using the ::after psuedo element */
a.next::after {
	content: '»';
}

/* Adds the left arrow before the element using the ::before psuedo element */
a.back::before {
	content: '«';
}
```

[« Back - Intro](README.md) | [Next - Units & Dimensions »](2-Units.md)