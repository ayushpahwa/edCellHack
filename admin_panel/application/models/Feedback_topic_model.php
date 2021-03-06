<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Feedback_topic_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get feedback_topic by feedback_topic_id
     */
    function get_feedback_topic($feedback_topic_id)
    {
        return $this->db->get_where('feedback_topics',array('feedback_topic_id'=>$feedback_topic_id))->row_array();
    }
        
    /*
     * Get all feedback_topics
     */
    function get_all_feedback_topics()
    {
        $this->db->order_by('feedback_topic_id', 'desc');
        return $this->db->get('feedback_topics')->result_array();
    }
        
    /*
     * function to add new feedback_topic
     */
    function add_feedback_topic($params)
    {
        $this->db->insert('feedback_topics',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update feedback_topic
     */
    function update_feedback_topic($feedback_topic_id,$params)
    {
        $this->db->where('feedback_topic_id',$feedback_topic_id);
        return $this->db->update('feedback_topics',$params);
    }
    
    /*
     * function to delete feedback_topic
     */
    function delete_feedback_topic($feedback_topic_id)
    {
        return $this->db->delete('feedback_topics',array('feedback_topic_id'=>$feedback_topic_id));
    }
}
