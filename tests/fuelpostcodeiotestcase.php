<?php

namespace FuelPostcodeIO;

require_once __DIR__ . '/../../../vendor/fzaninotto/faker/src/autoload.php';

use Fuel\Core\TestCase;

abstract class FuelPostcodeIOTestCase extends TestCase
{
	/**
	 * @var string
	 */
	protected $postcode = "B77 1JR";
}