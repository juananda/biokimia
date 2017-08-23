<?php

Class Model_article extends CI_Model{

	Public function __construct()
	{
		parent::__construct();
	}

	Public function insert_data($tableName, $data)
	{
		if ($this->db->insert($tableName, $data)) {
			return true;
		}
	}

}

?>