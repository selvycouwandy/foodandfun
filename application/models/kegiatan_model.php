<?php
class Kegiatan_model extends CI_Model{
    //======================== FOR LOGIN PAGE ===================================//
    function cek($table,$where){      
        return $this->db->get_where($table,$where);
    }

    //=========================== SELECT DATA ========================================//

     //tampil database member?

    function show_kegiatan(){
    $query=$this->db->query('select * from kegiatan');
    return $query->result();
    } 

    //========================== INSERT / INPUT DATA =====================================//
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    //========================== HAPUS DATA ========================================//
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function input_admin($where,$table){
        $this->db->where($where);
        $this->db->insert($table);
    }

    //============================= EDIT DATA ======================================//
    function edit_data($where,$table){      
        return $this->db->get_where($table,$where);
    }

    //=========================== UPDATE DATA ======================================//
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    } 

    //Fungsi untuk menghitung jumlah anggota, disini memanggil tabel anggota UKM, eksekusinya ada di View//
    function total_anggota(){
        $query = $this->db->query('SELECT * FROM anggota_ukm');
        return $query;
    }

}       
?>