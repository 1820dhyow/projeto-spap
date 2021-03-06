== Menu Order ==
Other than in many themes you may already know, in Chunk the main navigation menu is ordered from right to left.

== Changelog ==

= 1.3.1 - June 19 2015 =
* Escaped all necessary inputs, URLs, etc.

= 1.3 - November 27, 2014 =
* Add support for the Eventbrite API plugin.
* Add previous/next navigation to single posts.
* Bug fixes.
* Security improvements.

= 1.2 - May 20 2013 =
* Updated license.
* Minor CSS adjustments to prepare for 3.6 compatibility.
* Prevented sub-menus from being unreachable in edge case circumstances.
* Reworked the audio post format.
* Use 3.6 Post Format API which falls back to HTML audio element which falls back to a text link.
* Removed SWF player and containing directory.
* Removed AudioPlayer javascript library.
* Updated chunk_audio_grabber() to use get_children().
* Added js/audio.js - which helps to identify browser support for audio files.
* New screenshot at 600x450 for HiDPI support.

= 1.1 - Jan 2 2013 =
* Made wp_title truly pluggable.
* Moved custom header and wpcom buisiness out of functions.php.
* Added post format links to each formatted post.
* Appended post title to Aside and Quote posts' content.
* Set a max-width on the comment meta and comment author areas so they don't overlap when threaded comments make for a narrow comment header area.
* CSS fixes to allow background gradients to stay put on pages with lots of content.
* Let users change desired date format: However, if a user chooses F j, Y format, the theme will print it as M d Y to prevent the date spans two lines. It is counter intutive but this approach minimizes the breaking on Chunk activated blogs and at least now user can change to other date formats except F j, Y.
* Updated Google Fonts link to include the Extended Latin character subset, which was excluded from the original API.
* Added a check is_ssl() to define a protocol for Google fonts in order to ensure it's available for both protocols.
* Removed loading of $locale.php.
* Made sure attribute escaping occurs after printing.
* Updated the "audio" post format.
* Removed outdated swfobject code from js/audio-player.js.
* Used core version of swfobject and listed as a dependency of js/audio-player.js.
* Removed unneeded jQuery dependency.
* Cleaned out unused functions.
* Slightly increased padding around top-level links to account for smaller custom fonts in menus with sub-menus.
* Moved functions for grabbing bits of content into the theme.
* Added trailing slash to URL in comment header.
* Added a little more margin on .wp-caption.alignleft and .wp-caption.alignright so that there is more breathing space around images with captions when wrapped by text.
* Removed self-link from titles in single.php.
* Added a byline for multi-author blogs hidden with CSS on single author blogs.
* Added body classes for single and multi-author blogs.
* Corrected the textdomain.
* Added and improved reblog styles for comment stream.

= 1.0 - Sep 13 2011 =
* Initial release.