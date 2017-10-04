<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Attendance extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Attendance_model');
    } 

    /*
     * Listing of attendance
     */
    function index()
    {
        $data['attendance'] = $this->Attendance_model->get_all_attendance();
        
        $data['_view'] = 'attendance/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new attendance
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'student_id' => $this->input->post('student_id'),
				'course_id' => $this->input->post('course_id'),
				'timestamp' => $this->input->post('timestamp'),
            );
            
            $attendance_id = $this->Attendance_model->add_attendance($params);
            redirect('attendance/index');
        }
        else
        {            
            $data['_view'] = 'attendance/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a attendance
     */
    function edit($attendance_id)
    {   
        // check if the attendance exists before trying to edit it
        $data['attendance'] = $this->Attendance_model->get_attendance($attendance_id);
        
        if(isset($data['attendance']['attendance_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'student_id' => $this->input->post('student_id'),
					'course_id' => $this->input->post('course_id'),
					'timestamp' => $this->input->post('timestamp'),
                );

                $this->Attendance_model->update_attendance($attendance_id,$params);            
                redirect('attendance/index');
            }
            else
            {
                $data['_view'] = 'attendance/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The attendance you are trying to edit does not exist.');
    } 

    /*
     * Deleting attendance
     */
    function remove($attendance_id)
    {
        $attendance = $this->Attendance_model->get_attendance($attendance_id);

        // check if the attendance exists before trying to delete it
        if(isset($attendance['attendance_id']))
        {
            $this->Attendance_model->delete_attendance($attendance_id);
            redirect('attendance/index');
        }
        else
            show_error('The attendance you are trying to delete does not exist.');
    }
    
}