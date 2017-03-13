# Units & Dimensions
CSS has many ways to specify [units of measurement and values](https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Values_and_units).

## Length & Size
The most common units we'll be using for setting the [size/length](https://developer.mozilla.org/en-US/docs/Web/CSS/length) of an element or property are:
- `px`
- `%`
- `em`
- `rem`

### `px`
Often used for precise values or specifying font sizes

```css
p {
	font-size: 16px;
}

.container {
	width: 500px;
}
```

### `%`
Specifying a [percentage](https://developer.mozilla.org/en-US/docs/Web/CSS/percentage) value are used to represent a percentage of its parent element.

```html
<section class="container">
	<p>Hello, World!</p>
</section>
```

```css
.container {
	width: 500px;
}

/* This will be 50% of its parent element (the .container element) */
p {
	width: 50%;
}
```

## Colors
[Colors](https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Values_and_units#Colors) can be represented using:
- [Keywords](https://developer.mozilla.org/en-US/docs/Web/CSS/color_value#Color_keywords)
- Hexadecimal values
- RGB and RGBA
- HSL

```css
p {
	color: blue /* Keywords are predefined and recognized by the browser */
}

.container {
	background-color: #3FBFBF; /* Hex color values begin with the # character */
}

/* use the rgb/rgba CSS functions to specify RGB and alpha values */
a:hover {
	color: rgba(63, 191, 191, 0.5);
}
```

## Dimensions
In addition to setting sizes, you can also set the dimensions of elements with various CSS properties:
- [height](https://developer.mozilla.org/en-US/docs/Web/CSS/height)
- [min-height](https://developer.mozilla.org/en-US/docs/Web/CSS/min-height)
- [max-height](https://developer.mozilla.org/en-US/docs/Web/CSS/max-height)
- [width](https://developer.mozilla.org/en-US/docs/Web/CSS/width)
- [min-width](https://developer.mozilla.org/en-US/docs/Web/CSS/min-width)
- [max-width](https://developer.mozilla.org/en-US/docs/Web/CSS/max-width)

Height and width can take the following values:
- auto
- length (i.e. `px`)
- `%`
- inherit

Maximums and minimums can take:
- none
- length
- %
 - inherit

```css
section {
	min-width: 200px
	max-width: 60%;
}

img {
	max-width: 250px;
	/* The image height will scale automatically to fit the ratio of the width */
	height: auto 
}
```

---
[« Back - Selectors](1-Selectors.md) | [Next - Styling Text »](3-Text.md)