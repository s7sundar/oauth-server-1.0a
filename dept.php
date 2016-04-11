
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
	
<link href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">

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
			<div class="col-md-10" style="top: 20px">
				<h1 class="page-header">Department</h1>

				<div class="panel panel-default">
					<div class="panel-body">
						<form class="form-inline">
							<div class="form-group">
								<label for="exampleInputName2">Department Name</label> <input
									type="text" class="form-control" id="exampleInputName2"
									placeholder="Department Name">
							</div>
							<button type="submit" class="btn btn-primary">
								<strong>Save</strong>
							</button>
						</form>
						<br />
						<table class="table table-striped" id="myTable">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Department Name</th>
									<th>Projects Running</th>
									<th>Projects Completed</th>
									<th>Actions</th>
								</tr>
							</thead>
							<?php for($i=1; $i<=5; $i++): ?>
							<tr>
								<td><?php echo $i; ?></td>
								<td>Dept <?php echo $i; ?></td>
								<td><?php echo rand(0,9); ?></td>
								<td><?php echo rand(0,100); ?></td>
								<td>
									<button type="button" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i> EDIT</button>
									<button type="button" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-ban-circle"></i> DISABLE</button>
								</td>								
							</tr>
							<?php endfor; ?>
							
						</table>

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
	
	<script type="text/javascript">
		$(document).ready(function(){
		    $('#myTable').dataTable();
		});
	</script>
</body>
</html>
