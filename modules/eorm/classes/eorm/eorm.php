<?php defined('SYSPATH') or die('No direct access allowed.');

class EORM_EORM exends ORM
{
	private $_column_list = array();

	public function __construct()
	{
		$this->init_columns();
		$this->_construct_columns();
	}

	protected function init_columns()
	{
	}

	/**
	 * Gets all data columns that this ORM field uses and converts them into
	 * Kohana's standard ORM structure.
	 */
	private function _construct_columns()
	{

			// Loop through all attributes and add Field instances to the column list
		for ($attribute in get_class_vars($this))
		{
			if ($attribute instanceof EORM_Field)
				array_push($this->_column_list, $attribute);
		}

	}
}

