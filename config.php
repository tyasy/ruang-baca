<?php
	$config = array(
		"db" => array(),
		"urls" => array(),
		"paths" => array(
			"images" => $_SERVER["DOCUMENT_ROOT"] . "/images"
		)
	);

	defined("TEMPLATES_PATH")
		or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

?>