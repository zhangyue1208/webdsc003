<?php

define("REVSLIDER_TEXTDOMAIN", "revslider");

class GlobalsRevSlider
{

    const SHOW_DEBUG = false;
    const SLIDER_REVISION = '4.1.1';
    const TABLE_SLIDERS_NAME = "revslider_sliders";
    const TABLE_SLIDES_NAME = "revslider_slides";
    const TABLE_SETTINGS_NAME = "revslider_settings";
    const TABLE_CSS_NAME = "revslider_css";
    const TABLE_LAYER_ANIMS_NAME = "revslider_layer_animations";

    const FIELDS_SLIDE = "slider_id,slide_order,params,layers";
    const FIELDS_SLIDER = "title,alias,params";

    const YOUTUBE_EXAMPLE_ID = "cXwQjHRZieI";
    const DEFAULT_YOUTUBE_ARGUMENTS = "hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;";
    const DEFAULT_VIMEO_ARGUMENTS = "title=0&amp;byline=0&amp;portrait=0;api=1";
    const LINK_HELP_SLIDERS = "http://themepunch.com/codecanyon/revolution_wp/documentation/";
    const LINK_HELP_SLIDER = "http://themepunch.com/codecanyon/revolution_wp/documentation/#!/main_settings";
    const LINK_HELP_SLIDE_LIST = "http://themepunch.com/codecanyon/revolution_wp/documentation/#!/slides_editor";
    const LINK_HELP_SLIDE = "http://themepunch.com/codecanyon/revolution_wp/documentation/#!/slide_general_settings";

    public static $table_sliders;
    public static $table_slides;
    public static $table_settings;
    public static $table_css;
    public static $table_layer_anims;
    public static $filepath_backup;
    public static $filepath_captions;
    public static $filepath_dynamic_captions;
    public static $filepath_static_captions;
    public static $filepath_captions_original;
    public static $urlCaptionsCSS;
    public static $urlStaticCaptionsCSS;
    public static $urlExportZip;
    public static $isNewVersion;

}

?>