<?php
class Admin_model extends CI_Model
{
    public function getByUsername()
    {
        $this->db->where('username', $username);
        $admin = $this->db->get('admins')->row_array();
        //SELECT * FROM admins where username={}
        return $admin;

    }
}
