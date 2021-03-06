<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Course extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Course_model');
    } 

    /*
     * Listing of courses
     */
    function index()
    {
        $data['courses'] = $this->Course_model->get_all_courses();
        
        $data['_view'] = 'course/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new course
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'course_code' => $this->input->post('course_code'),
            );
            
            $course_id = $this->Course_model->add_course($params);
            redirect('course/index');
        }
        else
        {            
            $data['_view'] = 'course/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a course
     */
    function edit($course_id)
    {   
        // check if the course exists before trying to edit it
        $data['course'] = $this->Course_model->get_course($course_id);
        
        if(isset($data['course']['course_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'course_code' => $this->input->post('course_code'),
                );

                $this->Course_model->update_course($course_id,$params);            
                redirect('course/index');
            }
            else
            {
                $data['_view'] = 'course/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The course you are trying to edit does not exist.');
    } 

    /*
     * Deleting course
     */
    function remove($course_id)
    {
        $course = $this->Course_model->get_course($course_id);

        // check if the course exists before trying to delete it
        if(isset($course['course_id']))
        {
            $this->Course_model->delete_course($course_id);
            redirect('course/index');
        }
        else
            show_error('The course you are trying to delete does not exist.');
    }
    
}
