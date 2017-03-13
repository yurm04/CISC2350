# Layout & Positioning

## Alignment
You can use the `text-align` property to set the justification of elements to `left`, `right`, or `center`

```css
p {
	text-align: left;
}

/* works on elements other than text */
img {
	text-align: center;
}

a {
	text-align: right;
}
```

## Floating
The [float](https://developer.mozilla.org/en-US/docs/Web/CSS/float) property dictates how the element flows with the rest of the content of the page.  An element can be `float`ed to the `left` or `right` and the other page contents will flow around it.

```html
<img src="some-img.png" />
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa incidunt quos omnis, quae molestiae architecto iure ipsam. Praesentium, harum, ab!</p>
```

```css
img {
	float: right;
}

/*
The image will float to the right side of the page and the paragraph text will flow around the image on its left side.
 */
```

To clear a float, you can use the [clear](https://developer.mozilla.org/en-US/docs/Web/CSS/clear) property to return an element to its regular document flow.

```css
p {
	clear: right;
}
```

## Positioning
You can set the [position](https://developer.mozilla.org/en-US/docs/Web/CSS/position) of elements using the `position` property.  The position property can take the following values:
- `static`
- `relative`
- `absolute`
- `fixed`
- `sticky`

```css
.container {
	position: relative;
}

header {
	position: fixed;
	top: 0;
}
```

---

[« Back - CSS Box Model](4-Box.md) | [Next - Structural HTML »](6-MoreHtml.md)

