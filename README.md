# RDMGumbyShell

[![Join the chat at https://gitter.im/RainyDayMedia/RDMGumbyShell](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/RainyDayMedia/RDMGumbyShell?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Its a WordPress theme based on the [Gumby Framework](http://gumbyframework.com/)! Installing this will give you a quick start on a theme, and includes one basic template. But it is essentially a blank theme that's mean for hacking and customizing. Also includes our typical gulpfile for improving the workflow. But don't think you have to use Gulp. We like it. We use it. But you do whatever you like.

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

You may want to edit the bower.json and/or package.json with your own project's information. You should definitely edit the style.scss with your theme's information.

That's it!

## The SASS

* **assets/scss/gumby/var/_settings.scss** you'll find the basic Gumby settings you can modify.
* **assets/scss/gumby/_fonts.scss** you'll find the font loaders.
* **assets/scss/styles.scss** you'll find your WordPress theme definition. Edit it with your project specific info.
* **assets/scss** you'll find a handful of sass partials. I like to keep project specific styles in these files. Some of them start with some general use classes. Add more or remove partials as needed, be sure to edit the `styles.scss` imports if you add or remove files.

## The Functions

You'll want to browse through `functions.php` and possibly make some changes. Its here you'll register your custom menus and sidebars, enable and disable features, enqueue additional scripts and styles, and add any theme specific functionality you need. We have included the free version of the excellent plugin [Advanced Custom Fields](http://www.advancedcustomfields.com/) already, but if you have the Pro version and want to include it as a required plugin, you'll need to enable it here as well.

We've also built a number of library functions you can use.

* **rdmgumby_admin_menu_separator( $position )** adds a separator at the given position.
* **__the_field( $key, $method, $post_id )** escapes ACF field output, using the given method. ($method and $post_id are optional and default to esc_html and the current post, respectively)
* **__the_sub_field( $key, $method, $post_id)** escapes ACF sub field output, using the given method. ($method and $post_id are optional and default to esc_html and the current post, respectively)
* * **rdmgumby_output_favicons()** outputs the html for the favicons generated with http://realfavicongenerator.net/
* **rdmgumby_show_featured_image( $id, $add_link )** outputs a post's featured image, or the fallback image if there isn't one. set $add_link to true to include a link to the full sized image ($id and $add_link are optional and default to the current post and false, respectively)
* **rdmgumby_enqueue_responsive_background( $selector, $image_id )** adds a media library image to the responsive background queue. $selector is the HTML selector (ideally use the id attribute), and $image_id is the WordPress media library id of the image
* **rdmgumby_output_social_links( $icon_modifier )** Outputs the social links defined in an ACF options page. Use a repeater field, social, with subfields type and url. The type subfield is used to determine which icon to display. $icon_modifier is an optional parameter that will modify which icon to display (eg. 'circled' will output the circled versions of the icons)

The following are enabled and disabled via the `functions.php` file. Comment or Uncomment the actions and filters as needed.

* **rdmgumby_add_alt_tags()** automatically adds alt tags to images in content, unless they already have one. defaults to enabled
* **rdmgumby_trim_excerpt()** an excerpt trimmer that doesn't strip out the &lt;p&gt; tags. defaults to enabled
* **rdmgumby_output_responsive_backgrounds()** outputs the javascript for each responsive background image that has been queued with rdmgumby_enqueue_responsive_background(). defaults to disabled

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

And it does all this on the fly. Every time you change a sass or js file in your project, it'll perform the required task again. This is why Gulp is great.

## License

You'll find it among the source as [License](https://github.com/RainyDayMedia/RDMGumbyShell/blob/master/LICENSE).
