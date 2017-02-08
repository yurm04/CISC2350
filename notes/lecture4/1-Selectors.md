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
