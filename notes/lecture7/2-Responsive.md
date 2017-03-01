# Responsive Web Development
Creating a *responsive* website or web page means you are developing your HTML and CSS to work across multiple screen sizes.  Nowadays, [anything and everything](http://www.samsung.com/us/explore/family-hub-refrigerator/) with a screen can have a web browser.  This means that as web developers, it is our responsibility to ensure that we create websites that work at any (or most) screen size(s).  Your site should be readable and accessible on multiple devices of varying sizes, including but not limited to:  smartphones, tablets, laptops, and desktops.

## Metadata: `viewport`
The meta element `viewport` allows you to communicate to mobile browsers certain values that will allow it to render your website better on smaller screens.

```
<!--
    - Tells the browser to match the device's width for the viewport
    - Sets an initial zoom value
-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
```

Let's breakdown the `content` value of this responsive meta tag:

* Values are comma separated, letting you specify a list of values for `content`
* The `width` value is set to `device-width`.  This will cause the browser to render the page at the same width of the device's screen size.
* `initial-scale` set to `1` indicates the "zoom" value if your web page when it is first loaded.  `1` means "no zoom."

There are other values you can specify for the `content` list (see links below), but this meta element will suffice for the purposes of our class.

**NOTE** You should *not* include the responsive meta tag in your code unless your website is set up to work responsively across different devices.

###  Resources
[Responsive Meta Tag](https://css-tricks.com/snippets/html/responsive-meta-tag/)

[Viewport Meta Tag](https://developer.mozilla.org/en-US/docs/Mozilla/Mobile/Viewport_meta_tag)

## Common device widths
There are a myriad of device screen sizes available that a user might view your website on.  It is difficult (but not impossible) to develop a responsive website that looks good at any and all viewport widths and heights.  For this reason, there are specific screen widths that are generally good practice to develop for and ensure your website is usable at these sizes.  These widths roughly fall at the following sizes:

- 320px (x-small mobile)
- 375px (small mobile)
- 768px (tablet)
- 1024px (laptop)
- 1440px (desktop)

Although it is good practice to creat and test your responsive design with these sizes in mind, it is also important that you test beyond the suggested sizes as well.

## Mobile First
More and more users are visiting websites from mobile devices today.  Because of this trend, there is a push to create implements what's known as a "mobile first" web design when creating sites.  "Mobile first" is the practice of designing and developing your websites with a mobile layout first, before ever imagining it as a desktop site.  The main reasoning behind this is that it is much easier to design and develop a website with a mobile mentality right from the start than it is to take an exisiting, non-mobile website and try to bring it into the 21st century.

[Mobile First](https://responsivedesign.is/strategy/page-layout/mobile-first/)

## Using `@media` queries
Building on what we covered last week, `@media` queries can be used to set conditions that must be met for certain styling to be applied to your page.  `@media` queries should be used to specify the viewport conditions (generally the `min` or `max` screen widths) that you are styling for.

```css
/* common media queries for responsive web development */

/*
	Anything that isn't wrapped in a media query will be applied by default.
	This is generally where your global styling is set, as well as any small
	device specific styling (mobile first!)
 */

@media screen only and (min-width: 375px) {
	/*
		styling for screens at least 375px wide
		e.x. iPhone 6 screens
	 */
}

@media screen only and (min-width: 768px) {
	/*
		styling for screens at least 768px wide
		e.x. many tablets
	 */
}

@media screen only and (min-width: 1020px) {
	/*
		styling for screens at least 1020px wide
		e.x. laptops or desktops
	 */
}
```

## Use fluid and relative units
Responive web development relies heavily on the use of fluid and relative units of measure:

- `%`
- `em`
- `rem`
- `vw`
- `vh`

[MDN: CSS length units](https://developer.mozilla.org/en-US/docs/Web/CSS/length)

### `em` & `rem`
`em` and `rem` units are relative font units.  This means that the size they translate to in pixels is *relative* to the font-size set on an element.

- `rem` is relative to the font-size set to the "root element" i.e. `html`.  If the font size on the `html` element is set to 16px then `1rem` is equal to `16px`, `2rem` equals `32px`, `2.5rem` equals `40px` and so on.
- `em` represent a value that is relative to the *inherited* font-size of an element.  For example, if a `<p>` element has a font-size of `1.5em` and that `<p>` element is the child of a `<section>` element with a font-size set at `14px`, then the `<p>` element's font-size equals `21px`.  **NOTE** Because `em` values reflect the *inherited* font-size of an element, be mindful everytime you explicity set an element's font-size.  This new font-size will cascade down to all of its child elements if they exist.

[Comprehensive Guide: When to Use Em vs. Rem](https://webdesign.tutsplus.com/tutorials/comprehensive-guide-when-to-use-em-vs-rem--cms-23984)

### Images and `%`
In general, you want your images to size themselves responsively within some range you define.  This is easily accomplished with the `%` unit.  The `%` will size an element to a percentage of its parent.

```html
<div class="container">
	<img src="hello.gif" alt="waving hello">
</div>
```

```css
.container {
	width: 100%;
	max-width: 500px;
	min-width: 250px;
}

/* the image resizes with the width of its parent, within the range we set */
.container img {
	max-width: 100%;
}
```

## General Resources
[Google Web Fundamentals: Responsive Web Design Basics](https://developers.google.com/web/fundamentals/design-and-ui/responsive/#size_content_to_the_viewport)

[Responsive Web Design: What It Is And How To Use It](https://www.smashingmagazine.com/2011/01/guidelines-for-responsive-web-design/)
