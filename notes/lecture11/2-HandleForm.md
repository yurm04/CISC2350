# Form Handling
Now that we know how to create an interface to collect information from our users via HTML forms, let's discuss how we can access that data.

## The `post` form method
In the html form that we created we needed to specify the `method` attribute.  The `method` attribute is going to determine what the form is going to do with the data it has collected: will it `get` something based on the form data or will it `post` something?

## The PHP [`$_POST`](http://php.net/manual/en/reserved.variables.post.php) variable
So how do we get the data that was `post`ed by the form that was submitted?  In PHP there is a special variable called the `$_POST` variable.  This variable is an _associative array_ of the data that was submitted via the `post` method.  Because this variable is an associative array, it will contain the _keys_ of the data we collected (which were the `name` attributes in our HTML elements) along with the respective _values_ that were collected.

```php
// accessing a value of a $_POST variable
echo $_POST['first_name'] // will get the value that was submitted with the 'first_name' element
```

By having access to the form data via the `$_POST` variable, we can process, manpulate, save, and dynamically change our pages based on the information collected.  Have a look at the [sample file](/samples/lecture11/form-handling/index.php) for this lecture to get a better understanding of what we are able to accomplish with this form data.


___

[« Back - HTML Forms](1-HTMLForms.md)
