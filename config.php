<?php

// initialization
error_reporting(0);
$settings = array();
$settings['rss.feeds']                 = array();
$settings['photo.dirs']                = array();

// name/title of the window
$settings['display.name']              = 'Fotolijst';

// interval for retrieving a new picture/quote; in ms
$settings['js.interval']               = '20000';


// required settings are 'url' (rss feed itself), 'cache' (filename) and 'logo' (path to image)
$settings['rss.feeds'][]               = array(
                                               'url'     => 'http://www.nu.nl/deeplink_rss2/index.jsp?r=Algemeen', 
                                               'cache'   => 'nu.nl.xml', 
                                               'logo'    => 'content/images/nu.nl.png',
                                              );
$settings['rss.feeds'][]               = array(
                                               'url'     => 'http://feeds.feedburner.com/tweakers/mixed', 
                                               'cache'   => 'tweakers.net.xml', 
                                               'logo'    => 'content/images/tweakers.net.png',
                                              );
$settings['rss.feeds'][]               = array(
                                               'url'     => 'http://rss.weeronline.nl/weernieuws/2/nederland.xml', 
                                               'cache'   => 'weather.rss.xml', 
                                               'logo'    => 'content/images/weather.png', 
                                               'all'     => true,    // use description instead of title
                                               'width'   => '480px', // custom width
                                               );

// error message to show when the downloading of a feeds fails
$settings['rss.error_message']         = 'De router faalt... alweer!';

// skip randomly through the feeds
$settings['rss.random']                = false;

// traffic image
$settings['files.url']                 = 'http://www.traphic.nl/generated/verkeersinformatie.png';

// you can give multiple dirs with images
$settings['photo.dirs'][]              = '/Users/janpaul/Desktop/Wallpapers/';
 
// custom copyright notice in the footer
$settings['photo.copyright']           = '';

// font size of the footer text, between 1 to 5 (inclusive)
$settings['photo.fontsize']            = 3;

// show the filename (or the formatted filename)
$settings['photo.show_filename']       = true;

// format the filename: slashes will become ' - ' and '.'/'_' will become spaces
$settings['photo.format_filename']     = true;

// maximum number of photos from one directory before showing a new directory
$settings['photo.max_from_dir']        = 10;