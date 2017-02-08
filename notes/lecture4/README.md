# CSS & HTML Part 2
This week we'll be digging into some more topics in HTML5 and CSS3.  We will learn about some more HTML elements and how to use them appropriately, as well as get a better look at CSS select properties.

## Cascading Style Sheets
Why do we refer to style sheets as "cascading?"  This refers to a sorting order to determine which style declarations take precedence in a style sheet.

```css
/* style.css */

p {
    color: blue;
}

p {
    color: red;
}


/*
    Which of the two rules will be rendered in our HTML file?
*/
```
One important consideration when determining style precedence is the location of the style declaration.  In general, the location of the style from highest precedence to lowest are as follows:
- Styles included **inline** with the HTML element as a `style` attribute.
- **Internal stylesheets** embedded in the `<style>` element of the HTML `<head>`.
- **External stylesheets** referenced in the HTML file via the `<link>` element.

A good rule of thumb is the closer a style declaration is to the HTML, the higher priority it will take.

## CSS Selectors
We've already seen [a few ways](https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Simple_selectors) to specify a CSS selector:

```css
/* type/element selector */
p {
    color: blue;
}

/* class attribute selector */
.blue-text {
    color: blue;
}

/* id attribute selector */
#blue-par {
    color: blue;
}

/* BONUS: grouping selector */
p,
.blue-text,
#blue-par {
    color: blue;
}
```

Now let's checkout a few other ways we can leverage the ruleset selector using:
- [Nesting/combinators](https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Combinators_and_multiple_selectors)
- [Attribute selectors](https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Attribute_selectors)
- [Psuedo-classes and psuedo-elements](https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Attribute_selectors)

[Next - Selectors »](1-Selectors.md)







