=== Search Exclude ===
Contributors: pronskiy, williamdodson, stevelock
Tags: admin, plugin, search
Requires at least: 3.3
Tested up to: 4.1
Stable tag: 1.2.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Hide any post or page from the search results.

== Description ==

With this plugin you can exclude any page, post or whatever from the WordPress search results by checking off the corresponding checkbox on post/page edit page.
Supports quick and bulk edit.

On the plugin settings page you can also see the list of all the items that are hidden from search.

== Installation ==

1. Upload `search-exclude` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to any post/page edit page and check off the checkbox `Exclude from Search Results` if you don't want the post/page to be shown in the search results

== Screenshots ==

1. screenshot-1.png
2. screenshot-2.png

== Changelog ==

= 1.2.1 =
* Fixed bug when unable to save post on PHP <5.5 because of boolval() usage

= 1.2.0 =
* Added quick and bulk edit support
* Tested up to WP 4.1

= 1.1.0 =
* Tested up to WP 4.0
* Do not show Plugin on some service pages in Admin
* Fixed conflict with bbPress
* Fixed deprecation warning when DEBUG is on

= 1.0.6 =
* Fixed search filtering for AJAX requests

= 1.0.5 =
* Not excluding items from search results on admin interface

= 1.0.4 =
* Fixed links on settings page with list of excluded items
* Tested up to WP 3.9

= 1.0.3 =
* Added support for excluding attachments from search results
* Tested up to WP 3.8

= 1.0.2 =
* Fixed: Conflict with Yoast WordPress SEO plugin

= 1.0.1 =
* Fixed: PHP 5.2 compatibility

= 1.0 =
* Initial release
