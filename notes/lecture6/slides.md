# Additional HTML and CSS Topics
---
## Vendor Prefixes
CSS [vendor prefixes](https://developer.mozilla.org/en-US/docs/Glossary/Vendor_Prefix) are strings that are prepended to CSS properties in order to ensure that the property will be rendered in the specified browser (Firefox, Chrome, Safari, IE).  Vendor prefixes specify the *browser rendering engine* that a specific browser is build on top of.

- `-webkit-` (Chrome, Safari, newer versions of Opera.)
- `-moz-` (Firefox)
- `-o-` (Old versions of Opera)
- `-ms-` (Internet Explorer)

There are a couple of reasons to use a vendor prefix along with a regular CSS property...

---
1. To implement browser specific properties that are not part of the CSS *standard*  e.x. [`::-ms-clear`](https://developer.mozilla.org/en-US/docs/Web/CSS/::-ms-clear)

```css
/*
  microsoft vendor prefix for the
  clear button in form inputs
*/

input::-ms-clear {
  display: none;
}
```
---
2. To use *experimental and non-standard* properties that are supported in a specific browser  e.x. [`-moz-appearance-`](https://developer.mozilla.org/en-US/docs/Web/CSS/-moz-appearance)

```css
/* used to give an element a "platform specific" style */
div {
    -moz-appearance: button;
}
```
---
There a plenty of [lists](http://ireade.github.io/which-vendor-prefix/) available to reference which css properties require vendor prefixes for full browser support and which ones can only be used for specific browsers.

### Helpful Resources
- [bitsofcode blog: CSS Vendor Prefixes](https://bitsofco.de/css-vendor-prefixes/)
- [David Walsh Blog: What are the Vendor Prefixes](https://davidwalsh.name/vendor-prefixes)

---
## HTML Entities
[An HTML Character Entity](https://developer.mozilla.org/en-US/docs/Glossary/Entity) is used to represent a character in HTML using a specific code.  In general, an HTML element is used to include a *reserved* HTML character in your HTML content.  The reserved HTML characters are:
- `<`
- `>`
- `"`
- `&`

---
This example of HTML entities in code...

```html
<p>Information &amp; Web Programming</p>
```

...Will be displayed as

```html
Information & Web Programming
```
---
There is an extensive [list](http://www.freeformatter.com/html-entities.html) of HTML entity character codes and numbers.

---
##  Media Queries

---
## Developer Tools

---
## Style Guide
A developer "style guide" is a write up detailing how your code should look.  The purpose of a style guide is to provide specific rules for how code should be structured in order to maintain consistency and readability in projects.

A style guide for any coding project is analogous to the formatting requirements of an essay:

```
Your essay should be in the following format:
- 12pt font
- 1.5pt line spacing
- Each new paragraph indented.
- Page numbers in the bottom right corner
```

---
Most programming languages have their own basic style guides that are typically followed and recommended.  On top of these base coding guidelines, developers and development teams can define their own specifications.  Coding style guides can create rules on things like...

---

1. Whitespace
2. Nesting elements
3. Separating code on new lines
4. Tabs vs. Spaces
5. Variable name cases
6. Variable name formats

Lets take a look at the common coding styles for HTML and CSS that we should be following.

---
###  HTML
- Different elements typically belong on separate lines, unless they are represented as part of the flow of content.

```html
<!-- Should be on separate lines -->
<h2>My Subtitle</h2>
<p>My first line of text</p>

<!-- Can be on the same line because of content flow -->
<p>My second line of text with an <a href="">anchor element</a> included
```
---
- Nested elements should be indented once within their parent.

```html
<!-- img element is indented within its parent -->
<div>
	<img src="wave.gif" alt="A person waving">
</div>

<section>
	<p>Line one of text</p>
	<p>Line two of text</p>
	<p>Line three of text</p>
	
	<!-- Further indenting nested elements within a nested element -->
	<ul>
		<li>Bullet 1</li>
		<li>Bullet 2</li>
		<li>Bullet 3</li>
	</ul>
</section>
```
---
- Double quotes for attribute values
	
```html
<a href="http://www.fordham.edu" class="fordham-link">Fordham</a>
```
---
- Use lower case tag names in elements, and lower case attributes.

```html
<!-- NO -->
<H1 CLASS="title">My Title</H1>
<P>Some Text</P>

<!-- Yes, please -->
<h1 class="title">My Title</h1>
<p>Some Text</p>
```

---

### CSS
- Each declaration is on its own line, unless it is a very small ruleset.
	
```css
/* This is fine because it's short */
h1 { font-size: 16px }


/* This is hard to read */
p {font-size: 12px;color:#222222;width:240px;height:auto;}


/* Easier to read */
p {
    font-size: 12px;
    color:#222222;
    width:240px;
    height:auto;
}
```

---

- Declarations should be indented within the ruleset braces, braces have a new line after them.
	
```css
/* Avoid this */
p {
color: black;
background-color: orange;
}
div {
width: 200px
background-color: orange;
}

/* Much Easier to read */
.text {
    color: black;
    background-color: orange;
}

.container {
    width: 200px
    background-color: orange;
}
```

---

- Rulesets separated by an empty line

	```css
	/* Causes me physical pain... */
	p {
		color: blue; }
	.container { width: 220px; height: 100px; } section {
		background-color: red;
	} a {
		text-decoration: none;}

	
	/* Clean, consistent, readable */
	p {
		color: blue;
	}

	.container {
		width: 220px;
		height 100px
	}

	section {
		background-color: red; 
		font-family: sans-serif;
	}

	a {
		text-decoration: none;
	}
	```

---

## The DOM
The Document Object Model (DOM) provides a structured representation of the [HTML] document and defines a way that the structure can be accessed from programs so that *they can change the document structure, style and content.*