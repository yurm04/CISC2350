# Structural HTML
HTML5 comes jampacked with elements that are meant to semantically structure a page:

- [`<header>`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header)
- [`<section>`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section)
- [`<article>`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article)
- [`<nav>`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav)
- [`<aside>`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/aside)
- [`<footer>`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer)

## Container Elements
The [`div`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div) and [`span`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/span) elements are generic container elements that don't inherently represent anything.  Their main use is to use as a parent element to nest other elements in, and apply styling to.

```html
<!-- index.html -->

<div class="container">
	<p>Hello, World!</p>
	<p><span class="today">Today</span> is <span class="date"February 8, 2017</span></p>
</div>
```

```css
.container {
	width: 300px;
	height: 200px;
	background-color: #CCC;
}

.today {
	font-weight: 600;
}

.date {
	color: limegreen;
}
```

[« Back - Layout](5-Layout.md)