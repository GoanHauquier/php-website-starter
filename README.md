# php-website-starter
A repo that can be used to kickstart a basic php website

## Get started

Get started by renaming **_env.php** to **env.php!**

## Making a new page

Go to Router.php and add a new route in $routes, like this:
```php
'/info'         => 'info/index'
```
**/info** is the path in the url we will listen to and **info/index** are the controller and method we will be calling when accessing this route!
Basically what this means is, we're going to get the InfoController and call its index method.

If you want to add more modules make sure they all have a controller and a view!
Controllers and Views have to follow the following structure:

```
[ModuleName]
    - Controller/[ModuleName]Controller.php
    - View/[ModuleName]View.php
```

**Happy coding!**