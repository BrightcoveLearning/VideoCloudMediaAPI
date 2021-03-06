<?php

  // This code example uses the PHP Media API wrapper
  // For the PHP Media API wrapper, visit opensource.brightcove.com

	// Include the BCMAPI SDK
	require('bc-mapi.php');
	// Include the Smarty templating system
  // for more info: http://www.smarty.net/
  require('Smarty-3.1.11/libs/Smarty.class.php');
	// instantiate smarty
	$smarty = new smarty();
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
    'video_fields' => 'id,name,shortDescription,thumbnailURL'
  );
  // Set our search terms
  $terms = array(
    'all' => 'tag:mapi_ex3',
  );
  // Make our API call
  $videos = $bc->search('video', $terms, $params);

  // var_dump($videos);
  $smarty->assign('videos' , $videos);
  // display the template populated with data
  $smarty->display('seo_playlist.tpl');
  
?>
