<?php

// This code example uses the PHP Media API wrapper
// For the PHP Media API wrapper, visit opensource.brightcove.com

	// Include the BCMAPI SDK
	require('bc-mapi.php');
	      
	// Instantiate the class, passing it our Brightcove API tokens (read, then write)
	$bc = new BCMAPI(
	  'WDGO_XdKqXVJRVGtrNuGLxCYDNoR-SvA5yUqX2eE6KjgefOxRzQilw..',
	  'Jyiei-T0_tDMwct8bUns819VTkfvkt9iX2mnIfkc8GNnREmW2YTG6A..'
	);
	// Create an array of meta data from our form fields
	  $metaData = array(
	    'id' => $_POST['id'],
	    'name' => $_POST['name'],
	    'shortDescription' => $_POST['shortDescription']
	  );
	
	  // Create a try/catch
	    try {
	      // Upload the video and save the video ID
	      $response = $bc->update('video', $metaData);
	      var_dump($response);
	    } catch(Exception $error) {
	      // Handle our error
	      echo $error;
	      die();
	    }
?>
Hello
