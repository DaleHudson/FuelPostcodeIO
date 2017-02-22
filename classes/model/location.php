<?php

namespace FuelPostcodeIO;

class Model_Locations extends \Orm\Model
{
	protected static $_table_name = "location";

	protected static $_properties = array(
		'id' => array(
			'data_type' => 'int',
			'form' => array(
				'type' => false,
			),
		),
		'postcode' => array(
			'data_type' => 'varchar',
		),
		'quality' => array(
			'data_type' => 'int',
		),
		'eastings' => array(
			'data_type' => 'varchar',
		),
		'northings' => array(
			'data_type' => 'varchar',
		),
		'country' => array(
			'data_type' => 'varchar',
		),
		'nhs_ha' => array(
			'data_type' => 'varchar',
		),
		'longitude' => array(
			'data_type' => 'decimal',
		),
		'latitude' => array(
			'data_type' => 'decimal',
		),
		'parliamentary_constituency' => array(
			'data_type' => 'varchar',
		),
		'european_electoral_region' => array(
			'data_type' => 'varchar',
		),
		'primary_care_trust' => array(
			'data_type' => 'varchar',
		),
		'region' => array(
			'data_type' => 'varchar'
		),
		'losa' => array(
			'data_type' => 'varchar',
 		),
		'mosa' => array(
			'data_type' => 'varchar',
		),
		'incode' => array(
			'data_type' => 'varchar',
		),
		'outcode' => array(
			'data_type' => 'varchar',
		),
		'admin_district' => array(
			'data_type' => 'varchar',
		),
		'parish' => array(
			'data_type' => 'varchar',
		),
		'admin_county' => array(
			'data_type' => 'varchar',
		),
		'admin_ward' => array(
			'data_type' => 'varchar',
		),
		'ccg' => array(
			'data_type' => 'varchar',
		),
		'nuts' => array(
			'data_type' => 'varchar',
		),
		'code_admin_district' => array(
			'data_type' => 'varchar',
		),
		'code_admin_county' => array(
			'data_type' => 'varchar',
		),
		'code_admin_ward' => array(
			'data_type' => 'varchar',
		),
		'code_parish' => array(
			'data_type' => 'varchar',
		),
		'code_ccg' => array(
			'data_type' => 'varchar',
		),
		'code_nuts' => array(
			'data_type' => 'varchar',
		),
		'created_at' => array(
			'data_type' => 'int',
			'form' => array(
				'type' => false,
			),
		),
		'updated_at' => array(
			'data_type' => 'int',
			'form' => array(
				'type' => false,
			),
		),
	);

	protected static $_observers = array(
		'Orm\\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
		'Orm\\Observer_Typing' => array(
			'events' => array('before_save', 'after_save', 'after_load'),
		),
	);
}