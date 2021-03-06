<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Classroom extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Classroom_model');
    } 

    /*
     * Listing of classroom
     */
    function index()
    {
        $data['classroom'] = $this->Classroom_model->get_all_classroom();
        
        $data['_view'] = 'classroom/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new classroom
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'course_id' => $this->input->post('course_id'),
				'teacher_id' => $this->input->post('teacher_id'),
				'group_id' => $this->input->post('group_id'),
            );
            
            $classroom_id = $this->Classroom_model->add_classroom($params);
            redirect('classroom/index');
        }
        else
        {            
            $data['_view'] = 'classroom/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a classroom
     */
    function edit($classroom_id)
    {   
        // check if the classroom exists before trying to edit it
        $data['classroom'] = $this->Classroom_model->get_classroom($classroom_id);
        
        if(isset($data['classroom']['classroom_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'course_id' => $this->input->post('course_id'),
					'teacher_id' => $this->input->post('teacher_id'),
					'group_id' => $this->input->post('group_id'),
                );

                $this->Classroom_model->update_classroom($classroom_id,$params);            
                redirect('classroom/index');
            }
            else
            {
                $data['_view'] = 'classroom/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The classroom you are trying to edit does not exist.');
    } 

    /*
     * Deleting classroom
     */
    function remove($classroom_id)
    {
        $classroom = $this->Classroom_model->get_classroom($classroom_id);

        // check if the classroom exists before trying to delete it
        if(isset($classroom['classroom_id']))
        {
            $this->Classroom_model->delete_classroom($classroom_id);
            redirect('classroom/index');
        }
        else
            show_error('The classroom you are trying to delete does not exist.');
    }
    
}
