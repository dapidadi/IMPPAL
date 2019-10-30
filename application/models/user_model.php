<?php defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model
{
    function tampil_data(){
         $query = $this->db->select("*")
                 ->from('user')
                 ->get();
        return $query->result();
    }
}
?> 