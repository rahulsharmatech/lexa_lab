<?php

require APPPATH.'libraries/REST_Controller.php';

class Student extends REST_Controller
{

public function index_post()
{

	echo "this is post method";

}


public function index_put()
{

	echo "this is put method";

}

public function index_delete()
{

	echo "this is delete method";

}

public function index_get()
{

  echo "This is a get method";

}


}


?>