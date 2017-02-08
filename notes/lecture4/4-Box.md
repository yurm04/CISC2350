# CSS Box Model
Every element on a web page is actually a rectangular box.  If you want to put that statement to a test, add the following code to one of your HTML files

```css
* {
	border: solid 2px red;
}
```

This will outline every HTML element in a solid red border.  Because everything on the web page is a rectangular box, CSS styles apply to everything in a box.  This brings us to the [CSS Box Model](https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Box_model).

![CSS Box Model Diagram](https://mdn.mozillademos.org/files/13647/box-model-standard-small.png)

## Box Model Properties 

### `width` and `height`
The `width` and `height` of the box are part of the *content box*, which is the area in which the content is displayed.

### `padding`
The [padding](https://developer.mozilla.org/en-US/docs/Web/CSS/padding) is the inner margin of the CSS box.  It is the space in between the content and the box border.

### `border`
A CSS [border](https://developer.mozilla.org/en-US/docs/Web/CSS/border) sits in between the outer and inner portions of the CSS box - the outer margin and the inner padding and content.  **NOTE** an actual border does not have to be visible in every element.

### `margin`
[margin](https://developer.mozilla.org/en-US/docs/Web/CSS/margin) is the outer aread of the box, surrounding the box border and pushing up against other box elements.

## Types of CSS Boxes
There is more than one type of [CSS box](https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Box_model#Types_of_CSS_boxes).  The CSS box types are specified by the CSS `display` property.

### Block
A `block` element is one that stacks on top of other elements.  `block` elements appear on their own lines on the page, and content before and after appear on separate lines.
- `<p>`, `<h1>`, `<h2>`, `<h3>`, `<h4>`, `<h5>`, `<h6>`
- `<div>`

### Inline
Opposite of the `block` - flows with the document text.  Inline boxes appear on the same line as other inline elements.
- `<img>`
- `<a>`
- `<span>`

### Inline Block
Kind of a combination of a `block` and an `inline` box.  It will remain on the same line as other `inline-block` elements until it does not fit in it's container, and then breaks to the next line.

```css
/* an <img> will normally be inline, but can be changed to block */
img {
	display: block;
}

div.one,
div.two {
	display: inline-block; /* These will be on the same line */
}
```

[« Back - Styling Text](3-Text.md) | [Next - Layout & Positioning »](5-Layout.md)