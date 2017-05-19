=== Community Events Privacy ===
Contributors: coreymckrill
Tags: community-events, privacy
Donate link: https://www.eff.org/
Requires at least: 4.8
Tested up to: 4.8
Stable tag: 0.1
License: GPLv2 or Later

Prevents WordPress from sending a user's IP address when determining a location to use for listing nearby WordPress community events.

== Description ==
WordPress connects to an API at api.wordpress.org to get a list of upcoming WordPress community events near the current user. In order to improve accuracy when determining the location of the current user and get relevant events, WordPress includes a partially anonymized IP address for the user when it sends its request.

This plugin prevents WordPress from sending an IP address for this purpose. It may decrease the accuracy of the location used to display events.

See the [WordPress.org privacy page](https://wordpress.org/about/privacy/) for more information about how IP addresses are used.

== Installation ==
For help installing this (or any other) WordPress plugin, please read the [Managing Plugins](https://codex.wordpress.org/Managing_Plugins) article on the Codex.

Once the plugin is installed and activated, it will work automatically. There is no configuration.

== Changelog ==
= 0.1 =
* [NEW] Initial version.
