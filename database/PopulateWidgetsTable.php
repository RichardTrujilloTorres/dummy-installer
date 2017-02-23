<?php

namespace Database;


use Database\Models\Widget;
use Illuminate\Database\Schema\Blueprint;

/**
 * Populates `widgets` table.
 */
class PopulateWidgetsTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        Widget::create([
            'name' => 'content',
            'title' => 'Content',
            'version' => '0.0.6',
            'description' => 'Display content widget',
            'manager' => 0,
            'enabled' => 1,
        ]);

        // TODO
// (6, 'content_image', 'Content Image', '0.0.6', 'Display content image widget', 0, 1),
// (7, 'map', 'Map Widget', '0.0.6', 'Display a map widget', 0, 1),
// (8, 'content_market', 'Content Market', '0.0.6', 'Display content short text in a widget', 0, 1),
// (9, 'menu', 'Menu', '0.0.6', 'Display menu items', 0, 1),
// (10, 'language_switch', 'Language switch widget', '0.0.6', 'Display language switch box in widget', 0, 1),
// (11, 'intro', 'Intro widget', '0.0.6', 'Intro image widget for contents', 0, 1),
// (12, 'routes', 'Routes widget', '0.0.6', 'Routes widget', 0, 1),
// (13, 'weather', 'Weather widget', '0.0.6', 'Weather widget', 0, 1),
// (14, 'flickr', 'Flickr plugin', '0.0.6', 'Flickr widget', 0, 1),
// (22, 'box_allmeta', 'Box All Meta widget', '0.0.6', 'Display meta data', 0, 1),
// (16, 'breadcrumbs', 'Breadcrumbs', '0.0.6', 'Display breadcrumbs', 0, 1),
// (17, 'share', 'Share widget', '0.0.6', 'Displat content share options', 0, 1),
// (18, 'videobox', 'Videobox widget', '0.0.6', 'Display video content', 0, 1),
// (19, 'panoramabox', 'Panoramabox widget', '0.0.6', 'Display 3D panorama images', 0, 1),
// (20, 'content_slideshow', 'Slideshow widget', '0.0.6', 'display images as slideshow', 0, 1),
// (21, 'content_headline', 'Content headline widget', '0.0.6', 'Display content headline', 0, 1),
// (23, 'box_onemeta', 'Onemeta widget', '0.0.6', 'Display one meta data', 0, 1),
// (24, 'box_distance', 'Distance widget', '0.0.6', 'Display contents by distance', 0, 1),
// (25, 'box_events', 'Events widget', '0.0.6', 'Display events', 0, 1),
// (26, 'togglemenu', 'Togglemenu widget', '0.0.6', 'Display togglemenu', 0, 1),
// (27, 'slider', 'Slider widget', '0.0.6', 'Display slider', 0, 1),
// (28, 'lastcontent', 'Lastcontent widget', '0.0.6', 'Display latests contents', 0, 1),
// (29, 'box_youtube', 'Youtube widget', '0.0.6', 'Display youtube contents', 0, 1),
// (30, 'box_instagram', 'Instagram widget', '0.0.6', 'Display instagram content', 0, 1),
// (31, 'gravatar', 'Gravatar widget', '0.0.6', 'Display gravatar icons', 0, 1),
// (32, 'box_gpsbooking', 'Gpsbooking widget', '0.0.6', 'Display hotels', 0, 1),
// (33, 'disqus', 'Disqus widget', '0.0.6', 'Display comment box', 0, 1),
// (34, 'address', 'Address widget', '0.0.6', 'Jump to address on the map', 0, 1),
// (35, 'bottommenu', 'Bottom menu widget', '0.0.6', 'Display bottom menu', 0, 1),
// (36, 'box', 'Box widget', '0.0.6', 'Display box', 0, 1),
// (37, 'box_collabrators', 'Collabrators widget', '0.0.6', 'Display collaborators articles', 0, 1),
// (38, 'box_cookie', 'Cookie widget', '0.0.6', 'Display cookie accept box', 0, 1),
// (39, 'content_allmeta', 'Allmeta content widget', '0.0.6', 'Display all meta data on content', 0, 1),
// (40, 'dividedmenu', 'Divided menu widget', '0.0.6', 'Display divided menu', 0, 1),
// (41, 'dropdownmenu', 'Dropdown menu widget', '0.0.6', 'Display dropdown menu', 0, 1),
// (42, 'form_contact', 'Contact form widget', '0.0.6', 'Display contact form', 0, 1),
// (43, 'jplayer', 'Jplayer widget', '0.0.6', 'Audio player', 0, 1),
// (44, 'leaflet_panel', 'Leaflet panel widget', '0.0.6', 'Display leaflet panel', 0, 1),
// (45, 'menu_full', 'Menu full widget', '0.0.6', 'Configurable menu', 0, 1),
// (46, 'owl_image', 'Owl image widget', '0.0.6', 'Image carousel', 0, 1),
// (47, 'owl_video', 'Owl video widget', '0.0.6', 'Video carousel', 0, 1),
// (48, 'soccorso', 'Soccorso widget', '0.0.6', 'Display soccorso', 0, 1),
// (49, 'topmenu', 'Topmenu widget', '0.0.6', 'Display top menu', 0, 1),
// (50, 'website_title', 'Website title widget', '0.0.6', 'Display website title', 0, 1);
        

        return true;
    }
}
