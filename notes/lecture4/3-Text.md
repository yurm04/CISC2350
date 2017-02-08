# Styling Text
Text is known as font in CSS.  CSS provides several properties for styling fonts for the web.  We'll cover the most commonly used and useful ones.

## `font-family`
[font-family](https://developer.mozilla.org/en-US/docs/Web/CSS/font-family) is the typeface for a given HTML element.  It's good practice to specify multiple `font-family` values to provide *fallbacks* for browsers that do not support certain fonts.

A few things to note about `font-family` values:
- Font names with spaces need to be enclosed in quotes `""`.
- Multiple fonts should be comma `,` separated.
- You can use [web safe](http://web.mit.edu/jmorzins/www/fonts.html) fonts (fonts that are often supported by most browsers) or you can [import your own fonts](https://fonts.google.com/).
- There are generic font names like `serif` and `sans-serif` that can be used as a default fallback.

## `font-style` and `font-weight`
[font-style](https://developer.mozilla.org/en-US/docs/Web/CSS/font-style) let's you set the text as `italic` or `oblique`.

[font-weight](https://developer.mozilla.org/en-US/docs/Web/CSS/font-weight) is the boldness of the font.  `font-weight` can accept a keyword as its value, or a numeric value of 100, 200, 300, 400, 500, 600, 700, 800, or 900 from lightest to boldest.

## `line-height`
line-height modifies the space between lines of text.  You can set this to be a `px` value or a relative value by omitting the unit of measure (defaults to `em`).

```
h1 {
	font-family: Georgia, "Times New Roman", serif;
	font-style: italic;
	font-weight: 600;
	line-height: 1.5;
}

p {
	font-family: "Helvetica Neueu", Helvetica, Arial, sans-serif;
	font-style: normal;
	font-weight: normal;
	line-height 1.3;
}
```

## `font`
You can also combine the different [font](https://developer.mozilla.org/en-US/docs/Web/CSS/font) properties onto one line in the following order `font: [style] [weight] [variant] [size/line-height] [font-family];

```css
p {
	font: normal 300 14px/1.3 "Helvetica Neue", Helvetica, Arial, sans-serif;
}
```

[« Back - Units & Values](2-Units.md) | [Next - CSS Box Model »](4-Box.md)

