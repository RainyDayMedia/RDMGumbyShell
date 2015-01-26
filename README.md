# RDMGumbyShell

Its a WordPress theme based on the [Gumby Framework](http://gumbyframework.com/), and gets a lot of it's structure from [_s](http://underscores.me/)! Installing this will give you a quick start on a theme, and includes several basic templates. But it is essentially a blank theme that's mean for hacking and customizing. Also includes our typical gulpfile for improving the workflow. But don't think you have to use Gulp. We like it. We use it. But you do whatever you like.

Happy Coding!

## Requirements

* [Ruby](https://www.ruby-lang.org/en/)
* [Sass](http://sass-lang.com/)
* [Bower](http://bower.io/)

### Required for Gulp support

* [Node](http://nodejs.org/)
* [NPM](https://www.npmjs.com/) (comes pre-bundled with Node)
* [Gulp](http://gulpjs.com/)

## Installation

Download the latest release and unpack it. Copy it into your WordPress installation and name it whatever you like:

``` sh
$ cp -r RDMGumbyShell /var/www/html/wordpress/wp-content/themes/your-theme-name
```

Complete the installation:

``` sh
$ cd your-theme-name
$ bower install
$ bundle install
```

If you plan to use Gulp:

``` sh
$ npm install
```

You may like to edit the bower.json and/or package.json with your own project's information.

That's it!

## The SASS

* **assets/scss/gumby/var/_settings.scss** you'll find the basic Gumby settings you can modify.
* **assets/scss/gumby/_fonts.scss** you'll find the font loaders.
* **assets/scss/gumby/_custom.scss** you'll find Gumby customizitions. I like to keep my Gumby specific customizitions in this file. It starts out blank.
* **assets/scss/styles.scss** you'll find your WordPress theme definition. Edit it with your project specific info.
* **assets/scss** you'll find a handful of sass partials. I like to keep project specific styles in these files. They all start out blank. Add more or remove partials as needed, be sure to edit the `styles.scss` imports if you add or remove files.

## The Functions

You'll want to browse through `functions.php` and possibly make some changes. Its here you'll register your custom menus and sidebars, enable and disable features, enqueue additional scripts and styles, and add any theme specific functionality you need. We have included the free version of the excellent plugin [Advanced Custom Fields](http://www.advancedcustomfields.com/) already, but if you have the Pro version, you'll need to enable it here as well.

We've also built a number of library functions you can use.

* **rdmgumby_admin_menu_separator( $position )** adds a separator at the given position.

The following are enabled and disabled via the `functions.php` file. Comment or Uncomment the actions or filters as needed.

* **rdmgumby_add_alt_tags()** automatically adds alt tags to images in content, unless they already have one
* **rdmgumby_trim_excerpt()** an excerpt trimmer that doesn't strip out the &lt;p&gt; tags

## The Templates

* **header.php** 
* **footer.php** 
* **index.php**
* **page.php**
* **archive.php**
* **comments.php**
* **content.php**
* **search.php**
* **404.php**
* **sidebar.php**
* **content-page.php**
* **content-single.php**
* **content-none.php**

Refer to each of these templates for their intended use. But keep in mind its a theme for hacking, use or lose whatever you need. We don't care.

## The Gulpfile

We've included an extensive Gupfile that improves our own workflow and should improve yours. Using gulp is entirely optional, but we would highly recommend using a task runner of some sort if you don't like gulp.

In order to start using gulp, you'll need to make a quick modification to the top of `gulpfile.js`:

``` javascript
// REQUIRED SETTINGS
var siteUrl = 'example.dev';
```

We've included several tasks that streamline workflow and take care of some tedious tasks.

* **BrowserSync** live browser reloader.
* **Javascript** concatenates and minifies your javascript. includes sourcemaps and a linter.
* **Sass** compiles all that lovely Sass into one file and minifies it. includes an autoprefixer. But not sourcemaps, yet (Gumby doesn't yet work with the latest version of Compass)
* **Bower Components** automatically grabs all the js, css, and fonts from your bower components, then concatenates and minifies them.

And it does all this on the fly. Every time you change a sass or js file in your project, it'll perform these tasks again. This is why Gulp is great.

## License

You'll find it among the source as [License](https://github.com/RainyDayMedia/RDMGumbyShell/blob/master/LICENSE).