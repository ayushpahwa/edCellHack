<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Teacher_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get teacher by teacher_id
     */
    function get_teacher($teacher_id)
    {
        return $this->db->get_where('teachers',array('teacher_id'=>$teacher_id))->row_array();
    }
        
    /*
     * Get all teachers
     */
    function get_all_teachers()
    {
        $this->db->order_by('teacher_id', 'desc');
        return $this->db->get('teachers')->result_array();
    }
        
    /*
     * function to add new teacher
     */
    function add_teacher($params)
    {
        $this->db->insert('teachers',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update teacher
     */
    function update_teacher($teacher_id,$params)
    {
        $this->db->where('teacher_id',$teacher_id);
        return $this->db->update('teachers',$params);
    }
    
    /*
     * function to delete teacher
     */
    function delete_teacher($teacher_id)
    {
        return $this->db->delete('teachers',array('teacher_id'=>$teacher_id));
    }
}
