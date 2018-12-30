<?php namespace ProcessWire;

/**
 * Initialize variables output in _main.php
 *
 * Values populated to these may be changed as desired by each template file.
 * You can setup as many such variables as you'd like. 
 *
 * This file is automatically prepended to all template files as a result of:
 * $config->prependTemplateFile = '_init.php'; in /site/config.php. 
 *
 * If you want to disable this automatic inclusion for any given template, 
 * go in your admin to Setup > Templates > [some-template] and click on the 
 * "Files" tab. Check the box to "Disable automatic prepend file". 
 *
 */

// Variables for regions we will populate in _main.php
// Here we also assign default values for each of them.
$title = $page->get('headline|title'); 
$content = $page->body;
$sidebar = $page->sidebar;

// We refer to our homepage a few times in our site, so 
// we preload a copy here in $homepage for convenience. 
$homepage = $pages->get('/'); 

//Custom root direction for files
$root = $config->urls->templates;

// Include shared functions
include_once("./_func.php"); 


//file download
if ($input->urlSegment1 == 'home') {
    $download_options = array(
        // boolean: halt program execution after file send
        'exit' => true,
        // boolean|null: whether file should force download (null=let content-type header decide)
        'forceDownload' => true,
        // string: filename you want the download to show on the user's computer, or blank to use existing.
        'downloadFilename' => '');
    session_write_close();
    if ($input->urlSegment2 && $input->urlSegment3) {
        $pagefile = $pages->get($input->urlSegment2)->files[$input->urlSegment3];
        if ($pagefile) {wireSendFile($pagefile->filename, $download_options);
        }
    }
}

