<?php

Class Model_name extends CI_Model{

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

	Public function get_all_data($tableName)
	{
		$query = $this->db->get($tableName);
		$data = $query->result();
		return $data;
	}

	Public function get_data_user($id)
	{
		$query = $this->db->get_where("user", array('id' => $id));
		$data = $query->result();
		return $data;
	}

	Public function update_data_user($data)
	{
		$this->db->set($data);
		$this->db->where("ID", $data['id']);
		if ($this->db->update("user", $data)) {
			return true;
		}

	}

	Public function delete_user($id)
	{
		if ($this->db->delete("user", "ID = ".$id)) {
			return true;
		}
	}

}

?>