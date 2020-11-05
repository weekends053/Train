<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class train_model extends CI_Model {
    //คำสั่ง Insert ข้อมูลต่างๆลงตาราง
function insert_Train($result){
    $this->db->insert('train',$result);
}
function insert_Origin($result2){
    $this->db->insert('origin_station',$result2);
}
function insert_Huayrach($result3){
    $this->db->insert('huayrach_station',$result3);
}
function insert_End($result4){
    $this->db->insert('end_station',$result4);
}
function travel(){
    $this->db->select('*');
    $this->db->from('train');
    $this->db->join('origin_station', 'origin_station.t_id = train.t_id', 'left');
    $this->db->join('huayrach_station', 'huayrach_station.t_id = train.t_id', 'left');
    $this->db->join('end_station', 'end_station.t_id = train.t_id', 'left');
    
    $query = $this->db->get();
    return $query->result();
    }

}
