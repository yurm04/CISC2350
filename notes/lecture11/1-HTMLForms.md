# HTML Forms
Often times, you will want to collect information from a user of your website.  An *HTML form* is a collection of HTML elements that work together to allow a visitor to enter data on the page. This form data can then be submitted to the server side for processing.

Forms are created with the `form` tag.  Visitors can enter information or select pre-defined choices using text boxes, lists, check boxes, radio boxes, and a variety of other form elements.  A `form` element needs *at least* the following attributes:

- `name` - the name of the form.
- `action` - the server side file/program that will process the form data.
- `method` - the way the information is sent to the server. Possible values are `post` and `get`.  We will discuss the specifics of these two methods in the next sections

```html
<form name="our-first-form" action="serverside-file.php" method="post">
<!-- Enter form elements here -->
</form>
```

## Form elements
Providing attributes to the `form` give the browser and server-side information on how to deliver the form data, but does not do much functionally from the perspective of the user.  The form needs additional HTML *form elements* that can be interacted with by the user to enter and submit the data being prompted for.

```html
<form name="our-first-form" action="serverside-file.php" method="post">
	<label for="first-name">Enter first name:</label>
	<input type="text" name="first-name">
	<input type="submit" value="Submit">
</form>
```

Here we see our first three form elements, [`label`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label), [`input`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input) and `submit`.  Let's break down these elements and their attributes.

### [`input`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input)
The `input` element is an interactive structure that can accept user info.  The `input` form has two important element attributes:

- `type` - the type of control to render and/or data to accept from the user.  Controls the kind of input element i.e. text, email, checkboxes, radio buttons, select dropdowns, etc.
- `name` - the unique name to identify the form element.  Similar to the `id` attribute, but the `name` of the element will be available on the server side.  More on that later.

We see two different types of `input` elements in this example: `text` and `submit`.  The `submit` type is rendered as a button that submits the form to the processing program when clicked.

There are many [different input types](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#Form_<input>_types) available for use.

### [`label`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label)
A `label` element does exactly what you think it would do: it is the *label* of an input element (or another item in the user interface).

- The `for` attribute links the label element to the `input` element it corresponds to (it is a label _for_ this element).  The value of `for` should be the `name` of the element it is labelling.

### Other form elements
There are many other types of [form elements](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form) available in HTML.  Check the lecture [sample file](/samples/lecture11/html-forms/index.html) for more form elements in actions
___

[Next -  Handling Forms »](2-HandleForm.md)

[« Back - Intro](README.md)
