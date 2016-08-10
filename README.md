# Kirby - Plugins widget

#### Version 1.0.0 - 2016-08-10
- Initial Public Offering

****

### What is it?

Kirby drafts widget. It shows a list of unpublished pages in a widget on the panel.

More info about Kirby can be found at http://getkirby.com

##Installation##

- Download the .zip and place the ```drafts``` folder (located in ```site\widgets```) in your own ```widgets``` folder.


##Customize it##

By default, the drafts list excludes the error page. You can add more pages to suit the needs of your project:

`'drafts' => panel()->site()->index()->invisible()->not('error')`

Add pages after 'error', separated by a comma, and between single quotes:

`'drafts' => panel()->site()->index()->invisible()->not('error','login','sitemap')`

You can also change the message displayed when there are no drafts in the template.php file.

****

This plugin was created as part of writing up a tutorial on macotuts: https://macotuts.com/tuto/medium/creating-first-widget
