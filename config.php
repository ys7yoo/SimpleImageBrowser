<?php

/**
 * If true, this script tries to find all directories in "autodetectroot".
 * (See next option "autodetectroot".)
 * 
 * WARNING: Scans all subdirectories of $config['autodetectroot'] on each
 *          request!
 * 
 *          Experimental, use with care!
 * 
 * Values: true, false
 */
$config['autodetect'] = false;


/**
 * Root directory that is scanned with "autodetect" enabled.
 * 
 * Values: relative path
 */
$config['autodetectroot'] = 'images';


/**
 * Albums with manual configuration. This array is used if "autodetect" is
 * false.
 * 
 * Values: associative array with "Title" => "relative path"
 */
$config['albums'] = array(
    'cooking' => 'joints/cooking',
    'filing.seated' => 'joints/filing.seated',
    'filing.stand' => 'joints/filing.stand',
    'house cleaning' => 'joints/house cleaning',
    'lifting' => 'joints/lifting',
    'machine work.light' => 'joints/machine work.light',
    'machine work.sawing' => 'joints/machine work.sawing',
    'packing' => 'joints/packing',
    'reading.seated' => 'joints/reading.seated',
    'reclining' => 'joints/reclining',
    'seated.quiet' => 'joints/seated.quiet',
    'sleeping' => 'joints/sleeping',
    'standing.relaxed' => 'joints/standing.relaxed',
    'typing' => 'joints/typing',
    'walking about' => 'joints/walking about',
    'writing' => 'joints/writing'
);


/**
 * The base title of this site. Image titles are appended with
 * " :: image title".
 * 
 * Values: string
 */
$config['sitetitle'] = 'MET images with joints';


/**
 * Description used in the html meta tag.
 * 
 * Values: string
 */
$config['metadescription'] = '';


/**
 * Keywords used in the html meta tag.
 * 
 * Values: string
 */
$config['metakeywords'] = '';


/**
 * Number of thumbnails next to the image. A value of n*3 looks best.
 * Do not use high numbers because all images are loaded by the client (no
 * thumbnail generation).
 * 
 * Values: integer, 1-n
 */
$config['paginginterval'] = 9;


/**
 * Sort images descending instead of ascending. Sorting is always alphabetically
 * at the moment. Choose a good filename if you want any special sorting.
 * 
 * Values: true, false
 */
$config['sortdescending'] = false;


/**
 * URL for the home button next to the image. If empty, the button is hidden.
 * 
 * Values: string
 */
$config['homeurl'] = '';


/**
 * Text for the info/about page.
 * 
 * Values: string, here with Nowdoc syntax
 */
$config['info'] = <<<'EOD'
    <p>
        Displayed with <a href="https://github.com/SammysHP/SimpleImageBrowser">Simple Image Browser</a> by <a href="http://www.sammyshp.de/">Sven Karsten Greiner</a>.
    </p>
EOD;

/**
 * Show a white border around the image.
 * 
 * Values: true, false
 */
$config['imageborder'] = false;
