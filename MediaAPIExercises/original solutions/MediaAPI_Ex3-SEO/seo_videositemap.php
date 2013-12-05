<?php

  // This code example uses the PHP Media API wrapper
  // For the PHP Media API wrapper, visit opensource.brightcove.com

	// Include the BCMAPI SDK
	require('bc-mapi.php'); 
	// Include the Smarty templating system
  // for more info: http://www.smarty.net/
  require_once('Smarty-3.1.11/libs/Smarty.class.php');
	// instantiate smarty
	$smarty = new smarty();
	// enable caching
	$smarty->setCaching(true);
	// set a separate cache_id for each unique URL
  $cache_id = md5($_SERVER['REQUEST_URI']);

	// set smarty directories
	$smarty->setTemplateDir('smarty/templates/');
  $smarty->setCompileDir('smarty/templates_c/');
  $smarty->setCacheDir('smarty/cache/');
  $smarty->setConfigDir('smarty/configs/');

	// Instantiate the class, passing it our Brightcove API tokens (read, then write)
	$bc = new BCMAPI(
	  'WDGO_XdKqXVJRVGtrNuGLxCYDNoR-SvA5yUqX2eE6KjgefOxRzQilw..',
	  'Jyiei-T0_tDMwct8bUns819VTkfvkt9iX2mnIfkc8GNnREmW2YTG6A..'
	);
  // Define our parameters
  $params = array(
    'video_fields' => 'id,name,shortDescription,thumbnailURL,tags,customFields,length'
  );
  // Set our search terms
    $terms = array();
  // Make our API call
  $videos = $bc->search('video', $terms, $params);
  echo('Data received from Video Cloud<br/>');
  // assign the data to smarty
  $smarty->assign('videos' , $videos);
  // set the filename
  $sitemapfile = 'sitemap.xml';
  // generate the sitemap populated with data
  $sitemap = $smarty->fetch('seo_sitemap.tpl', $cache_id);
  echo('Bytes written to sitemap: ');
  echo $filelength =  file_put_contents($sitemapfile, $sitemap);
 echo('<br/>Sitemap created successfully');
?>
