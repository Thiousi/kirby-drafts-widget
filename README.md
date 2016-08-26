# Kirby Drafts Widget
![Version](https://img.shields.io/badge/version-1.1.0-green.svg)
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

## Configuration

By default, the drafts list excludes the error page. You can add more pages to suit the needs of your project, in the `drafts.php` file:

```
'drafts' => panel()->site()->index()->invisible()->not('error')
```

Add pages after 'error', separated by a comma, and between single quotes:

```
'drafts' => panel()->site()->index()->invisible()->not('error','login','sitemap')
```

You can also change the message displayed when there are no drafts in the `template.php` file.

## To-do
- [ ] Get list of excluded pages from configuration instead of widget code
- [ ] Make it multi-lingual
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
