<?php
/**
 * LeadActivityFixture
 *
 */
class LeadActivityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'start_up_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'closed_dae' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'start_up_date' => '2014-12-31 09:51:30',
			'closed_dae' => '2014-12-31 09:51:30',
			'user_id' => 1
		),
	);

}
