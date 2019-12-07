<?php 	if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Rate_model extends CI_Model{

	function add_new_property($points, $feedback,$name,$a){
    $this->db->set('dept_id',$a);
    $this->db->set('points',$points);
    $this->db->set('name',$name);
    $this->db->set('feedback',$feedback);
    $query = $this->db->insert('rating');
    return;
  }

  function getRows($id = ""){
        if(!empty($id)){
            $this->db->where(array('dept_id' => $id));
            $this->db->order_by('dept_id', 'desc');
            $this->db->from('departments');
            $query = $this->db->get();
            return $query->row_array();
        }else{
            $this->db->order_by('dept_alias', 'asc');
            $query = $this->db->get('departments');
            return $query->result_array();
        }
    }

    function getRowID(){
            $this->db->order_by('dept_alias', 'asc');
            $this->db->select('dept_id');
            $this->db->from('departments');
            $query = $this->db->get();
            return $query->result_array();
        }

    function getRatings(){

        $query = $this->db->query('SELECT points, name, feedback, departments.dept_alias FROM rating
                                    LEFT JOIN departments ON departments.dept_id = rating.dept_id');
        return $query->result_array();
    }

    function getYear(){
        $query = $this->db->query('SELECT DISTINCT year(rate_year) as rate_year FROM rating');
        return $query->result_array();
    }
}