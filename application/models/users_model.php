<?php
defined('BASEPATH') OR exit('ไม่อนุญาตให้เข้าถึงโดยตรง');
class Users_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getUsers(){
        $result = $this->db->query('SELECT * FROM user');
        return $result->row();
    }
}