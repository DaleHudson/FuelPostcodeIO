<?php

namespace FuelPostcodeIO;

require_once __DIR__ . '/../fuelpostcodeiotestcase.php';
require_once __DIR__ . '/../../classes/postcodeio.php';

class Test_PostcodeIO extends FuelPostcodeIOTestCase
{
	/**
	 * @group Postcode
	 */
	public function test_successful_postcode_lookup()
	{
		$postcodeIO = new PostcodeIO();
		$result = $postcodeIO->lookup($this->postcode);

		$this->assertInstanceOf('stdClass', $result);
		$this->assertInternalType('object', $result);
		$this->assertObjectHasAttribute('result', $result);
		$this->assertEquals(200, $result->status);
	}

	/**
	 * @group Postcode
	 */
	public function test_successful_postcode_valid_lookup()
	{
		$postcodeIO = new PostcodeIO();
		$result = $postcodeIO->valid_lookup($this->postcode);

		$this->assertInstanceOf('stdClass', $result);
		$this->assertInternalType('object', $result);
		$this->assertObjectHasAttribute('result', $result);
		$this->assertEquals(200, $result->status);
		$this->assertTrue($result->result);
	}
}