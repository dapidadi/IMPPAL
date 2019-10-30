<?php

class Register_model extends CI_Model
{
	public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('user')
                 ->order_by('id_user', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("user", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    // public function edit($id_user)
    // {

    //     $query = $this->db->where("id_user", $id_user)
    //             ->get("user");

    //     if($query){
    //         return $query->row();
    //     }else{
    //         return false;
    //     }

    // }

    // public function update($data, $id)
    // {

    //     $query = $this->db->update("user", $data, $id);

    //     if($query){
    //         return true;
    //     }else{
    //         return false;
    //     }

    // }

    // public function hapus($id)
    // {

    //     $query = $this->db->delete("user", $id);

    //     if($query){
    //         return true;
    //     }else{
    //         return false;
    //     }

    // }



}

?>