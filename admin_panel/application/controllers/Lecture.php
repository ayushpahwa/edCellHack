<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Lecture extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lecture_model');
    } 

    /*
     * Listing of lectures
     */
    function index()
    {
        $data['lectures'] = $this->Lecture_model->get_all_lectures();
        
        $data['_view'] = 'lecture/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new lecture
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'classroom_id' => $this->input->post('classroom_id'),
				'group_id' => $this->input->post('group_id'),
				'status' => $this->input->post('status'),
				'timestamp' => $this->input->post('timestamp'),
            );
            
            $lecture_id = $this->Lecture_model->add_lecture($params);
            redirect('lecture/index');
        }
        else
        {            
            $data['_view'] = 'lecture/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a lecture
     */
    function edit($lecture_id)
    {   
        // check if the lecture exists before trying to edit it
        $data['lecture'] = $this->Lecture_model->get_lecture($lecture_id);
        
        if(isset($data['lecture']['lecture_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'classroom_id' => $this->input->post('classroom_id'),
					'group_id' => $this->input->post('group_id'),
					'status' => $this->input->post('status'),
					'timestamp' => $this->input->post('timestamp'),
                );

                $this->Lecture_model->update_lecture($lecture_id,$params);            
                redirect('lecture/index');
            }
            else
            {
                $data['_view'] = 'lecture/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The lecture you are trying to edit does not exist.');
    } 

    /*
     * Deleting lecture
     */
    function remove($lecture_id)
    {
        $lecture = $this->Lecture_model->get_lecture($lecture_id);

        // check if the lecture exists before trying to delete it
        if(isset($lecture['lecture_id']))
        {
            $this->Lecture_model->delete_lecture($lecture_id);
            redirect('lecture/index');
        }
        else
            show_error('The lecture you are trying to delete does not exist.');
    }
    
}
