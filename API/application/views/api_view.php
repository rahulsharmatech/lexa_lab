<!DOCTYPE html>
<html>
<head>
	<title>Crud rest api in codeigniter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
		<br>
          <h3>Create Crud Rest Api In code igniter</h3>
          <br>
          <div class="container">

		  <h2>Basic Panel</h2>
		  <div class="panel panel-default">
		  	  <div class="panel-heading">
		  	  	<div class="row">
		  	  		<div class="col-md-6">
		  	  			<h3 class="panel-title">Crud Rest api in codeigniter</h3>
		  	  		</div>
		  	  		<div class="col-md-6" align="right">
		  	  			
		  	  		</div>
		  	  	</div>
		        <div class="panel-body">

		        <table class="tabel table-bordered table-striped">
		        	<thead>
		        		<tr>
		        			<th>First Name</th>
		        			<th>Last Name</th>
		        			<th>Edit</th>
		        			<th>Delete</th>
		        		</tr>
		        	</thead>
		        	<tbody>
		        		
		        	</tbody>
		        </table>

		        </div>
		          
		     </div>
		  </div>
		</div>

		
	</div>

</body>
</html>


<script type="text/javascript">
	
	$(document).ready(function(){
      
      function fetch_data()
      {
      	$.ajax({

      		url:"<?php  echo base_url(); ?>test_api/action",
      		method:"POST",
      		data:{data_action:'fetch_all'},
      		success:function(data)
      		{
      			$('tbody').html(data);
      		}
      	})
      }
      
      fetch_data();

	});

</script>