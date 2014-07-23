<?php 
class VerifiedValueSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $verified_values = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'model' => array('type' => 'string', 'null' => false, 'length' => 45, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'foreign_key' => array('type' => 'string', 'null' => false, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'property' => array('type' => 'string', 'null' => false, 'length' => 100, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'is_verified' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'key' => 'index'),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => true, 'key' => 'index'),
		'user_id' => array('type' => 'string', 'null' => true, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'model' => array('column' => 'model', 'unique' => 0),
			'foreign_key' => array('column' => 'foreign_key', 'unique' => 0),
			'property' => array('column' => 'property', 'unique' => 0),
			'is_verified' => array('column' => 'is_verified', 'unique' => 0),
			'status' => array('column' => 'status', 'unique' => 0),
			'user_id' => array('column' => 'user_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

}
