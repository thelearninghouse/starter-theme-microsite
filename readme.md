# Learning House Wordpress Micro-Site Starter Theme

This is a base theme to speed up development of Modality-Agnostic Micro-sites (MAGs). In addition to the usual build tools and basic theme structure included with the base TLH starter theme, this theme includes many features that all MAG sites share, like specific templates, basic layout CSS, and common components. It is designed to be duplicated and modified as needed to build a MAG site branded for a particular school. Necessary plugins are bundled, as well as a configuration file for [Advanced Custom Fields](https://www.advancedcustomfields.com/) to set up standard fields to help organize information for the school and programs offered.

## Features

- Gulp task that compiles Sass, minifies JS, and live-updates the page with BrowserSync
- Pre-defined templates for standard pages
- Content editor powered by Advanced Custom Fields
- General purpose accessible components like accordions and icons

## Getting Started

1. Create a new repository for the new microsite theme and clone this theme into it.
2. Set up a new local development environment and clone the new repository into it.
3. Install dependencies by navigating to the theme's `library` folder and running `npm install` followed by `bower install`.
4. Edit `gulpfile.js` and change the proxy in the BrowserSync section to match the url you set up for your local development environment.
5. Run `gulp` from the `library` folder to start BrowserSync and watch for changes on source files.
6. Log in to the WP Admin.
7. Under _Appearance > Themes_, make sure that the correct theme is selected if you renamed the theme folder.
8. Under _Plugins_, make sure that the included plugins are activated.
9. Under _Custom Fields > Tools_, import `acf-export-latest.json` located in the theme's `library` folder to set up the base fields.

## Theme File Structure

``` bash
starter-theme/
├── library
|    ├── bower_components  // Where all our bower components are housed
|    ├── css  //
|    |   ├── build // Production Files
|    |   |   ├── ie.css  // IE Stylesheet
|    |   |   ├── lp-style.css  // Main stylesheet for Landing Pages
|    |   |   └── style.css  // Main Stylesheet
|    ├── images  // Images relative to the theme
|    ├── js  //
|    |   ├── build // Production Files
|    |   |   ├── production.js // Concatenated JavaScript file
|    |   |   └── production.min.js
|    |   ├── libs // For javascript libraries i.e. Modernizr
|    |   └──  scripts.js // Main javascript file
|    ├── plugins // plugin folders that are critical to the theme
|    ├── scss
|    |    ├── base
|    |    |    ├── _base.scss // Base stylesheet for mobile and up
|    |    |    ├── _grid.scss // Setting up SUSY and grid styling
|    |    |    ├── _mixins.scss // All mixins
|    |    |    ├── _normalize.scss // Normalize
|    |    |    ├── _typography.scss // Typography styling
|    |    |    └── _variables.scss // Variables (breakpoints, colors, etc.)
|    |    ├── modules
|    |    |    ├── _accordion.scss // Styling for accordions
|    |    |    ├── _buttons.scss // Contains styling that applies to buttons
|    |    |    ├── _card.scss // Styling for cards
|    |    |    ├── _clearfix.scss // Clearfix class decleration
|    |    |    ├── _features.scss // Styling for the common list of icons with paragraphs
|    |    |    ├── _forms.scss // Form styling
|    |    |    ├── _icon.scss // Styling for inline svg icons
|    |    |    ├── _links.scss // Link Styling
|    |    |    ├── _media.scss // Styling for images, videos, etc.
|    |    |    ├── _progress.scss // Styling for the progress bar on blog posts
|    |    |    ├── _sidebar.scss // Sidebar Styling
|    |    |    ├── _social.scss // Social Sharing Styling
|    |    |    └── _tables.scss // Table styling
|    |    ├── pages
|    |    |    ├── _home.scss // Homepage Styling
|    |    |    ├── _layout.scss // Layout Styling
|    |    |    ├── _page.scss // Page Styling
|    |    |    └── _post.scss // Blog Post Styling
|    |    ├── partials
|    |    |    ├── _footer.scss // Footer Styling
|    |    |    ├── _header.scss // Header Styling
|    |    |    ├── _nav.scss // Navigation Styling
|    |    |    └── _print.scss // Print Styling
|    |    ├── ie.scss // IE stylesheet
|    |    ├── lp-style.scss // Landing Page stylesheet
|    |    └── style.scss // Main stylesheet, this gets compiled into ==> style.css
|    ├── .sassdocrc // Settings for SassDoc
|    ├── acf-export-latest.json // Advanced Custom Fields data for new installs
|    ├── bones.php  // Functions and features for the theme
|    ├── bower.json  // Bower setup and dependencies
|    ├── custom-post-types.php  // Where we register our custom post types for Online Degrees and Landing Pages
|    ├── Gruntfile.js  // Grunt setup file
|    ├── package.json  // npm details and dependencies
|    └── template-tags.php  // custom php functions to generate html for templates
├── 404.php  // Template for 404 page
├── archive-degrees.php  // Archive template for Online Degrees
├── archive.php  // Archive template for blog posts
├── favicon.png  // Favicon
├── footer-lp.php // Landing Page Footer template
├── footer.php // Footer template
├── front-page.php  // Homepage template
├── functions.php  // Controls features and functionality custom to the theme
├── header-lp.php  // Landing Page Header template
├── header.php  // Header template
├── index.php  // Blog index template
├── page.php	  // Page template
├── screenshot.png  // Image used for the theme
├── sidebar.php  // Sidebar template
├── single-degrees.php  // Online Degree page template
├── single.php  // Single blog post template
└── style.css  // Stylesheet used for theme information
```

## Resources

### Style Guide

For common patterns and styles please use this resource. This was mostly created for the inbound when they create blog post. [View Style Guide](http://tlhstarter.wpengine.com/style-guide)

#### Setting up the Style Guide

Make sure `style-guide/index.php` is pointing to the main css stylesheet.

Update patterns to include/exclude patterns found on the new site.

### Sassdoc

This documentation is for the front-end team for easy access to variable, mixins, functions, etc. [View SassDoc](http://tlhstarter.wpengine.com/sassdoc)
