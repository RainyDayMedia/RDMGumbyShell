# gumby-wordpress-theme

Its a WordPress theme based on the Gumby Framework! Installing this will give you a quick start on a theme, but is essentially a blank theme. Also includes a gulpfile for improving the workflow. Happy Coding!

## Requirements

* [Ruby](https://www.ruby-lang.org/en/)
* [Sass](http://sass-lang.com/)
* [Bower](http://bower.io/)
* [NPM](https://www.npmjs.com/)
* [Gulp](http://gulpjs.com/) (this is optional)

## Installation

Download the latest release and unpack it. Copy it into your WordPress installation and name it whatever you like:

``` sh
$ cp -r gumby-wordpress-theme /var/www/html/wordpress/wp-content/themes/.
$ cd /var/www/html/wordpress/wp-content/themes
$ mv gumby-wordpress-theme your-theme-name
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

## Customizing

In `assets/scss/gumby/var/_settings.scss` you'll find the basic Gumby settings you can modify.

In `assets/scss/gumby/_fonts.scss` you'll find the font loaders.

In `assets/scss/gumby/_custom.scss` you'll find Gumby customizitions. I like to keep my Gumby specific customizitions in this file. It starts out blank.

In `assets/scss/styles.scss` you'll find your WordPress theme definition. Edit it with your project specific info.

In `assets/scss` you'll find a handful of sass partials. I like to keep project specific styles in these files. They all start out blank. Add more or remove partials as needed, be sure to edit the `styles.scss` imports if you add or remove files.

## The Gulpfile

I've included an extensive Gupfile that improves my own workflow and should improve yours. Using gulp is entirely optional, but I would highly recommend using a task runner of some sort if you don't like gulp.

In order to start using gulp, you'll need to make a quick modification to `gulpfile.js`:

** TODO: Add gulpfile information **