<?php

class Mlogin_frontend extends CI_Model{
    
    public function cek_login($u,$p){
        $q = $this->db->get_where('tbl_member', array('username' => $u,'password'=>$p));
        return $q;
    }

}

?>