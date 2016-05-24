<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MonthlyTest extends CI_Controller {

    public function test_index(){
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/test_index');
        $this->load->view('include/footer');
    }    
    //--------------------------------------------------------------------------
    public function test_studentdetails($id = null){
        $this->db->select('*');
        $this->db->from('monthly_test');
        $this->db->join('courses','courses.course_name = monthly_test.class_id');
        $this->db->join('student','student.s_id = courses.fkstudent_id');
        $this->db->join('users','users.u_id = student.fkuser_id');
        $this->db->join('mark_obtained','mark_obtained.fk_student_id = student.s_id');
        $this->db->join('courses_added', 'courses_added.course_id = monthly_test.class_id');
        $this->db->join('courses_category', 'courses_category.course_c_id = monthly_test.subject_id');
        $this->db->where('monthly_test.test_id', $id);
        $this->db->where('mark_obtained.fktest_id', $id);

        $query = $this->db->get();
        $result['result'] = $query->result();
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/test_studentdetails',$result);
        $this->load->view('include/footer');
    }    
    //--------------------------------------------------------------------------
    
    public function student_testview( $class_id = null, $subject_id = null){
       $this->db->select('*');
       $this->db->from('student');
       $this->db->join('users','users.u_id = student.fkuser_id');
       $this->db->join('courses','courses.fkstudent_id = student.s_id');
       $this->db->join('courses_category', 'courses_category.fk_course_id = courses.course_name');
       $this->db->join('courses_added', 'courses_added.course_id = courses_category.fk_course_id');
       $this->db->join('monthly_test', 'monthly_test.class_id = courses_added.course_id');
       $this->db->where('courses.course_name',$class_id);
       $this->db->where('courses_category.course_c_id',$subject_id);
       $this->db->where('monthly_test.status', 0);       
       
       $query = $this->db->get();
       $result['result'] = $query->result();
       
       $this->db->where('courses_category.course_c_id',$subject_id);
       $query = $this->db->get('courses_category');
       $result['result_1'] = $query->result();
       if(empty($result['result']))
       {
           redirect(site_url().'monthlytest/result_add');
       }
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/student_testview',$result);
        $this->load->view('include/footer');
    }    
    //--------------------------------------------------------------------------
    
    public function result_add(){
        
        $query  = $this->db->get('courses_added');
	$result['result'] = $query->result();
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/result_add',$result);
        $this->load->view('include/footer');
    }    
    //--------------------------------------------------------------------------
    
    public function all_student_testview(){
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/student_testview');
        $this->load->view('include/footer');
    }    
    //--------------------------------------------------------------------------
        
    public function create_monthlytest_result_after_post($id = null) {
        
        $test_name      = $this->input->post('test_name');
        $test_month     = $this->input->post('test_month');
        $test_date      = $this->input->post('test_date');
        $total_marks    = $this->input->post('total_marks');
        $class_id       = $this->input->post('class_name');
        $subject_id     = $this->input->post('subject_name');
        $created_date   = mdate("%y-%m-%d");
        
        $insert_monthlytest_table = $this->db->insert('monthly_test',
            [
                'test_name'    => $test_name,
                'test_month'   => $test_month,
                'test_date'    => $test_date,
                'total_marks'  => $total_marks,
                'class_id'     => $class_id,
                'subject_id'   => $subject_id,
                'created_at'   => $created_date,
            ]);
        
            redirect(site_url() . 'monthlytest/student_testview/'.$class_id .'/'.$subject_id);
    }
    //--------------------------------------------------------------------------
    
    public function result_view( $id = null )
    {
       $this->db->select('*');
       $this->db->from('monthly_test');
       $this->db->join('courses_added', 'courses_added.course_id = monthly_test.class_id');
       $this->db->join('courses_category', 'courses_category.course_c_id = monthly_test.subject_id');
       $query = $this->db->get();
       $result['result'] = $query->result();
       
//       echo '<pre>';
//       print_r($result);
//       die();
       $this->load->view('include/header');
       $this->load->view('include/sidebar');
       $this->load->view('monthlytest/result_view',$result);
       $this->load->view('include/footer');
    }    
    //--------------------------------------------------------------------------
    
    public function result_details( $s_id = null, $test_id = null )
    {
        $this->db->select('*');
        $this->db->from('mark_obtained');
        $this->db->join('monthly_test','monthly_test.test_id = mark_obtained.fktest_id');
        $this->db->join('student','student.s_id = mark_obtained.fk_student_id');
        $this->db->join('users','users.u_id = student.fkuser_id');
        $this->db->join('courses','courses.fkstudent_id = student.s_id');
        $this->db->join('courses_added', 'courses_added.course_id = courses.course_name');
        $this->db->join('courses_category', 'courses_category.course_c_id = monthly_test.subject_id');
        $this->db->where('mark_obtained.fk_student_id', $s_id);
        $this->db->where('mark_obtained.fktest_id', $test_id);

        $query            = $this->db->get();
        $result           = $query->result();
        $result['result'] = $result[0]; 
        $this->db->where( 'payment.fkstudent_id', $s_id);
        $query = $this->db->get('payment');
        $result['payment'] = $query->result();
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/result_details',$result);
        $this->load->view('include/footer');
    }    
    //--------------------------------------------------------------------------
    
    public function result_delete($test_id = null) {
        
         $this->db->delete('monthly_test',['test_id' => $test_id]);

        redirect(site_url() . 'monthlytest/result_view');
    }
    
    //--------------------------------------------------------------------------
    
    public function enter_student_marks($id = null) {
        
	$counter = $this->input->post('counter');
	$created_date   = mdate("%y-%m-%d");
        
        $this->db->where('monthly_test.test_id',$id);
        $query = $this->db->get('monthly_test');
        $result['monthly_test'] = $query->result();
       
	for( $i=1; $i <= $counter; $i++ ){
	    $temp_o_m = 'obtain_marks_' . $i;
	    $temp_s_i = 'student_id_' . $i;
	    $obtain_marks = $this->input->post($temp_o_m);
	    $student_id   = $this->input->post($temp_s_i);
	    $test_id    = $this->input->post('fktest_id');
            $percentage = '';
            
            
	    if( !empty( $obtain_marks ) ){

                $insert_status_monthlytest = $this->db->update('monthly_test',
		    [
			'status'  => 1,
		    ],['test_id' => $id]
		);
                if($result['monthly_test'][0]->total_marks >= $obtain_marks){
                 $calculation = $obtain_marks/$result['monthly_test'][0]->total_marks;
                 $percentage = $calculation * 100;
                                      
                }
                $average = number_format((float)$percentage, 1, '.', '');
               
		$insert_marks = $this->db->insert('mark_obtained',
		    [
			'fk_student_id'  => $student_id,
			'fktest_id'      => $test_id,
			'ob_marks'       => $obtain_marks,
			'percentage'     => $average,
			'created_at'     => $created_date
		    ]
		);
	    }
           
	}
       
        redirect(site_url().'monthlytest/test_index');
    }
    
    //--------------------------------------------------------------------------

}
