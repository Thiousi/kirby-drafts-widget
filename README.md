# Kirby Drafts Widget
![Kirby Drafts Widget logo](https://github.com/Thiousi/kirby-drafts-widget/blob/master/drafts-logo.png)

![Version](https://img.shields.io/badge/version-1.2.0-green.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)
![Kirby Version](https://img.shields.io/badge/Kirby-2.3%2B-red.svg)

Panel dashboard widget displaying all unpublished pages for [Kirby](http://getkirby.com).

![Kirby Drafts Widget screenshot](https://github.com/Thiousi/kirby-drafts-widget/blob/master/drafts.png)

## Installation

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following command in your shell from the root folder of your Kirby installation:

```
kirby plugin:install Thiousi/kirby-drafts-widget
```

### 2. Manual
[Download this archive](https://github.com/Thiousi/kirby-drafts-widget/archive/master.zip), extract it and rename it to `drafts-widget`. Copy the folder to your `site/plugins` folder.

### 3. Git Submodule
If you know your way around git, you can download this as a submodule:

```
$ git submodule add https://github.com/Thiousi/kirby-drafts-widget site/plugins/drafts-widget
```

## Usage
You don't have anything to do once the widget is installed. The widget has two states:

### 1. No drafts to display

![Kirby Drafts Widget no drafts](https://github.com/Thiousi/kirby-drafts-widget/blob/master/nodrafts.png)

### 2. Drafts to display

![Kirby Drafts Widget unpublished](https://github.com/Thiousi/kirby-drafts-widget/blob/master/drafts.png)

## Options

The following options can be set in your `/site/config/config.php` file:

```php
/* Drafts widget */
c::set('plugin.drafts.widget.exclude', array('error'));
c::set('plugin.drafts.widget.nodrafts', 'No drafts... Start writing today!');
```

### plugin.drafts.widget.exclude

This option is an array of pages that will be excluded from the drafts widget. Add pages after 'error', separated by a comma, and between single quotes

### plugin.drafts.widget.nodrafts

This option is a string, which is displayed instead of the list of drafts when there are no drafts.

## To-do
- [ ] Internationalize widget? Already ok for draft names, only message is not internationalized
- [X] ~~Get list of excluded pages from configuration instead of widget code~~
- [X] ~~Update readme~~
- [X] ~~Make it CLI and submodule compatible~~

## Credits
This plugin was created as part of writing up a tutorial on macotuts: https://macotuts.com/tuto/medium/creating-first-widget

## License
MIT

## Changelog
### 1.0.0
- Initialial release

### 1.1.0
- Made CLI compatible
- Made Submodule compatible
- Enhanced Readme
- Updated screenshots
- Fixed compressed headline and spacing issues

### 1.2.0
- Text now set in configuration
- List of excluded pages now set in configuration
- Readme enhanced with options
