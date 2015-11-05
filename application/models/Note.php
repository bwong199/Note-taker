<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Model{

	public function get_notes()
	{
		$query = "SELECT * FROM notes";
		$notes = $this->db->query($query)->result_array();
		return $notes;
	}

	public function create($post)
	{
		$query = "INSERT INTO notes (title) VALUES (?)";
		$this->db->query($query, array($post['title']));
	}

	public function destroy($post)
	{
		$query = "DELETE FROM notes WHERE id = ?";
		$this->db->query($query, array($post['id']));
	}

	public function update($post)
	{
		$query = "UPDATE notes SET description = ? WHERE id = ? ";
		$this->db->query($query, array($post['description'], $post['id']));
	}

}
