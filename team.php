
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">

<title>Dashboard Template for Bootstrap</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"
	rel="stylesheet">

<link href="<?php echo base_url('assets/css/token-input.css'); ?>"
	rel="stylesheet">

<link href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"
	rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Project name</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Settings</a></li>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Help</a></li>
				</ul>
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="Search...">
				</form>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2" style="top: 50px">
				<?php $this->load->view('menu'); ?>
			</div>
			<div class="col-md-10" style="top: 50px">
				<div class="col-md-12">
					<div class="col-md-9" style="padding-left: 0px;">
						<h1 class="page-header">Team Management</h1>
					</div>
					<div class="col-md-3" style="top: 50px">
						<div class="btn-group">
							<button type="button" class="btn btn-success">
								<i class="glyphicon glyphicon-plus-sign"></i> <strong>Add New</strong>
							</button>
							<button type="button" class="btn btn-default">
								<i class="glyphicon glyphicon-th-list"></i> <strong>View All</strong>
							</button>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-body">

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName2">Department</label> <input
									type="text" class="form-control input-sm" id="dept"
									placeholder="Department">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName2">Service Category</label> <input
									type="text" class="form-control input-sm" id="service"
									placeholder="Service Category">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName2">Sub Category</label> <input
									type="text" class="form-control input-sm"
									id="exampleInputName2" placeholder="Sub Category">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName2">Skills</label> <input type="text"
									class="form-control typeahead" id="tagsinput"
									placeholder="Skills: PHP, MySql, JavaScript, AngularJs, ExpressJs, NodeJs, Android...">
							</div>
						</div>

						<div class="clear">&nbsp;</div>

						<div class="col-md-6">
							<table class="table table-striped" id="userTable">
								<thead>
									<tr>
										<th>EmpId</th>
										<th>Name</th>
										<th>Role</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="checkbox" /> A2190</td>
										<td title="SHANMUGA SUNDARAM">SHANMUGA...</td>
										<td>Specialist</td>
										<td title="View Details"><button type="button"
												class="btn btn-default btn-xs">
												<i class="glyphicon glyphicon-play-circle"></i>
											</button></td>
									</tr>
									<tr>
										<td><input type="checkbox" /> A2175</td>
										<td>RIJO</td>
										<td>Specialist</td>
										<td title="View Details"><button type="button"
												class="btn btn-default btn-xs">
												<i class="glyphicon glyphicon-play-circle"></i>
											</button></td>
									</tr>
								</tbody>
							</table>

						</div>
						<div class="col-md-1">
							<button style="margin-top: 50px;" type="button"
								class="btn btn-success">
								<i class="glyphicon glyphicon-log-out"></i>
							</button>
						</div>
						<div class="col-md-5">
							<table class="table table-striped" id="userTable">
								<thead>
									<tr>
										<th>EmpId</th>
										<th>Name</th>
										<th>Role</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>A2190</td>
										<td title="SHANMUGA SUNDARAM">SHANMUGA...</td>
										<td><select class="form-control input-sm">
												<option>Specialist</option>
												<option>Developer</option>
												<option>Manager</option>
												<option>Team Lead</option>
										</select></td>
										<td title="Remove"><button type="button"
												class="btn btn-danger btn-xs">
												<i class="glyphicon glyphicon-remove-circle"></i>
											</button></td>
									</tr>
									<tr>
										<td>A2175</td>
										<td>RIJO</td>
										<td><select class="form-control input-sm">
												<option>Specialist-1</option>
												<option>Developer</option>
												<option>Manager</option>
												<option>Team Lead</option>
										</select></td>
										<td title="Remove"><button type="button"
												class="btn btn-danger btn-xs">
												<i class="glyphicon glyphicon-remove-circle"></i>
											</button></td>
									</tr>
								</tbody>
							</table>

						</div>

						<div class="clear">&nbsp;</div>

						<div class="col-md-12 text-right">							
							<button type="submit" class="btn btn-primary" style="width: 100px;">
								<strong>&nbsp;Save&nbsp;</strong>
							</button>
						</div>



					</div>
				</div>


			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script
		src="<?php echo base_url('assets/js/bootstrap-typeahead.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.tokeninput.js'); ?>"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			
		    $('#userTable').dataTable({
		    	"info":false,
		    	"filter":false,
		    	"paging":false,
		    	"aoColumnDefs" : [{
		            'bSortable' : false,
		            'aTargets' : [ 0,3 ]
		        }],
		    });
		    
			var jsonData = ['PHP','MySql','JavaScript','AngularJs','ExpressJs','NodeJs','Android'];
			var aData = [];
			$.each(jsonData, function(iIndex, val){
				aData.push({id:iIndex+1,name:val});
			});
			$("#tagsinput").tokenInput(aData);

			var aDept = [];
			for(var i=1;i<=5; i++)
				aDept.push('Department '+i);
			
			$("#dept").typeahead({ source:aDept });

			var aService = [];
			for(var i=1;i<=5; i++)
				aService.push('Service Category '+i);
			
			$("#service").typeahead({ source:aService });
            
			
			
		});
	</script>
</body>
</html>
