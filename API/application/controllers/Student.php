<?php

require APPPATH.'libraries/REST_Controller.php';

class Student extends REST_Controller
{

	 public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->database();
	 	$this->load->model(array("Student_model"));
    //$this->load->library("security");
	 	$this->load->library("form_validation");

	 }

//Insert Students data

public function index_post()
{
  $data=json_decode(file_get_contents("php://input"));  
    //   json decode means converting json data into the array
    //   json encode means converting array data into the json
  $name=isset($data->name)?$data->name :"";
  $email=isset($data->email)?$data->email:"";
  $mobile=isset($data->mobile)?$data->mobile:"";
  $course=isset($data->course)?$data->course:"";

  if(!empty($name)  && !empty($email) && !empty($mobile) && !empty($course))
  {
      $student = array(
          
          "name"=>$name,
          "email"=>$email,
          "mobile"=>$mobile,
          "course"=>$course
      );

      if ($this->Student_model->insert_student($student)) 
      {
      	$this->response(array("status"=>1,
      	"message"=>"Student Has Been Created"),REST_Controller::HTTP_OK);
      }
      else
      {
      	$this->response(array("status"=>0,"message"=>"Failed To Create Student"),REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
      }
  }
    else
    {
    	$this->response(array("status"=>0,
    	"messege"=>"All Fields Are needed"),REST_Controller::HTTP_NOT_FOUND);
    }

}


//insert data using form validation

public function index_form_post()
{
	$name=$this->input->post("name");
	$email=$this->input->post("email");
	$mobile=$this->input->post("mobile");
	$course=$this->input->post("course");

	$this->form_validation->set_rules("name","Name","required");
	$this->form_validation->set_rules("email","Email","required|valid_email");
	$this->form_validation->set_rules("mobile","Mobile","required");
	$this->form_validation->set_rules("course","Course","required");

	if($this->form_validation->run()===FALSE)
	{
		$this->response(array("status"=>0,"message"=>"All fields are needed"),REST_Controller::HTTP_NOT_FOUND);
	}
	else
	{
		 if(!empty($name)  && !empty($email) && !empty($mobile) && !empty($course))
		  {
		      $student = array(
		          
		          "name"=>$name,
		          "email"=>$email,
		          "mobile"=>$mobile,
		          "course"=>$course
		      );

		      if ($this->Student_model->insert_student($student)) 
		      {
		      	$this->response(array("status"=>1,
		      	"message"=>"Student Has Been Created"),REST_Controller::HTTP_OK);
		      }
		      else
		      {
		      	$this->response(array("status"=>0,"message"=>"Failed To Create Student"),REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
		      }
		  }
	}

}




// Update students

public function index_put()
{
  $data = json_decode(file_get_contents("php://input"));
  if(isset($data->id)  && isset($data->name) && isset($data->mobile) && isset($data->course))
  {
     $student_id=$data->id;
     $student_info = array( 
        "name"=>$data->name,
        "email"=>$data->email,
        "mobile"=>$data->mobile,
        "course"=>$data->course
     );
     if($this->Student_model->update_student_info($student_id,$student_info)) 
     {
     	$this->response(array("status"=>1,"message"=>"Student Data Updated Successfully"),REST_Controller::HTTP_OK);
     }
     else
     {
     	$this->response(array("status"=>0,"message"=>"Failed To update the Student Data"), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
     }
  }
  else
  {
  	$this->response(array("status"=>0,"message"=>"All Fields Are Needed"), REST_Controller::HTTP_NOT_FOUND);
  }

}

// Delete students Method 

public function index_delete()
{

 $data= json_decode(file_get_contents("php://input"));
  $student_id=$this->security->xss_clean($data->student_id);
  if($this->Student_model->delete_student($student_id))
  {
    $this->response(array("status"=>1,"message"=>"Student Has been deleted"),REST_Controller::HTTP_OK);
  }
  else
  {
     $this->response(array("status"=>0,"message"=>"Failed To delete"),REST_Controller::HTTP_NOT_FOUND);
  }

}


//Get Studnts All Data

public function index_get()
{
	$student = $this->Student_model->get_students();

	if(count($student) > 0 )
	{

	$this->response(array(
      
      "status"=>1,
      "message"=>"Student found",
      "data"=>$student
	),REST_Controller::HTTP_OK );

	}
		else
		{
		  $this->response(array( 
	      "status"=>0,
	      "message"=>"No Student found",
	      "data"=>$student
		),REST_Controller::HTTP_NOT_FOUND);

		}
}


}


?>