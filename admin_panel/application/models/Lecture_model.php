<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Lecture_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get lecture by lecture_id
     */
    function get_lecture($lecture_id)
    {
        return $this->db->get_where('lectures',array('lecture_id'=>$lecture_id))->row_array();
    }
        
    /*
     * Get all lectures
     */
    function get_all_lectures()
    {
        $this->db->order_by('lecture_id', 'desc');
        return $this->db->get('lectures')->result_array();
    }
        
    /*
     * function to add new lecture
     */
    function add_lecture($params)
    {
        $this->db->insert('lectures',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update lecture
     */
    function update_lecture($lecture_id,$params)
    {
        $this->db->where('lecture_id',$lecture_id);
        return $this->db->update('lectures',$params);
    }
    
    /*
     * function to delete lecture
     */
    function delete_lecture($lecture_id)
    {
        return $this->db->delete('lectures',array('lecture_id'=>$lecture_id));
    }
}
