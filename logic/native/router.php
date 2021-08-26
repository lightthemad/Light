<?php

/**
 * A Url Router
 *
 */

function route($url)
{
	// Read the JSON file
	$json = file_get_contents(root . '/logic/config/path.json');

	// Decode the JSON file
	$data = json_decode($json,true);

	if (array_key_exists($url, $data))
	{
		include_once 'controller/controller.php';
		$data[$url]();
	}
	else
	{
		header('Location: http://127.0.0.1/');
	}

}
