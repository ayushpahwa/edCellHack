<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Topic_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get topic by topic_id
     */
    function get_topic($topic_id)
    {
        return $this->db->get_where('topics',array('topic_id'=>$topic_id))->row_array();
    }
        
    /*
     * Get all topics
     */
    function get_all_topics()
    {
        $this->db->order_by('topic_id', 'desc');
        return $this->db->get('topics')->result_array();
    }
        
    /*
     * function to add new topic
     */
    function add_topic($params)
    {
        $this->db->insert('topics',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update topic
     */
    function update_topic($topic_id,$params)
    {
        $this->db->where('topic_id',$topic_id);
        return $this->db->update('topics',$params);
    }
    
    /*
     * function to delete topic
     */
    function delete_topic($topic_id)
    {
        return $this->db->delete('topics',array('topic_id'=>$topic_id));
    }
}
