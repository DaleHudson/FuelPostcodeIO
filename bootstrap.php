<?php

\Autoloader::add_namespace('FuelPostcodeIO', __DIR__ . '/classes/');

\Autoloader::add_classes(array(
	'FuelPostcodeIO\\PostcodeIO' => __DIR__ . '/classes/postcodeio.php',
));