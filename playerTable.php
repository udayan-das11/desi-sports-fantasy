<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Desi cricket </title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/shop-item.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Desi Sports Fantasy</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Game Types</a>
						</li>
						<li>
							<a href="#">Rules</a>
						</li>
						<li>
							<a href="#">Scoring</a>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li class="dropdown">
							<a class="dropdown-toggle"
							data-toggle="dropdown"
							href="#"> User Details <b class="caret"></b> </a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Logout</a>
								</li>
								<li>
									<a href="#">History</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<!-- <div class="container"> -->
		<!-- <embed src="banner/Banner 2.swf" align="left" width="800px" height="200px"> -->
		<!-- </div> -->

		<!-- Page Content -->
		<div class="container">
			<div class="row">

				<div class="col-md-6">
					<div class="thumbnail">
						<table class="table table-hover">
							<caption>
								Table for Teams
							</caption>
							<thead>
								<tr style="background-color: #66bae9 ">
									<th style="color:white ">Name</th>
									<th style="color:white">Team</th>
									<th style="color:white">Role</th>
									<th style="color:white">Price</th>
								</tr>
							</thead>
							<tbody>
								<tr id ="draggable1" draggable="true" ondragstart="dragStart(event);">
									<td>Dhoni</td>
									<td>Bangalore</td>
									<td>560001</td>
									<td>1 ana</td>

								</tr>
								<tr id ="draggable1" draggable="true" ondragstart="dragStart(event);";>
									<td>Dhoni</td>
									<td>Bangalore</td>
									<td>560001</td>
									<td>1 ana</td>

								</tr>
								<tr id ="draggable1">
									<td>Dhoni</td>
									<td>Bangalore</td>
									<td>560001</td>
									<td>1 ana</td>

								</tr>
								<tr id ="draggable1">
									<td>Dhoni</td>
									<td>Bangalore</td>
									<td>560001</td>
									<td>1 ana</td>

								</tr>
								<tr id ="draggable1">
									<td>Dhoni</td>
									<td>Bangalore</td>
									<td>560001</td>
									<td>1 ana</td>

								</tr>
								<tr id ="draggable1">
									<td>Dhoni</td>
									<td>Bangalore</td>
									<td>560001</td>
									<td>1 ana</td>

								</tr>
								<tr id ="draggable1">
									<td>Dhoni</td>
									<td>Bangalore</td>
									<td>560001</td>
									<td>1 ana</td>

								</tr>
								<tr id ="draggable1">
									<td>Dhoni</td>
									<td>Bangalore</td>
									<td>560001</td>
									<td>1 ana</td>

								</tr>
								<tr id ="draggable1">
									<td>Dhoni</td>
									<td>Bangalore</td>
									<td>560001</td>
									<td>1 ana</td>

								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6" ondragover="dragOver(event);" ondrop="drop(event);">
					<div class="thumbnail" id="droptarget1" >
						<div class="btn-group" pull-right>
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Team <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="#" onclick="some();">CSK</a>
								</li>
								<li>
									<a href="#">RCB</a>
								</li>
								<li>
									<a href="#">RR</a>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->

		<div class="container">

			<hr>

			<!-- Footer -->
			<footer>
				<div class="row">
					<div class="col-lg-12">
						<p>
							Copyright &copy; Your Website 2014
						</p>
					</div>
				</div>
			</footer>

		</div>
		<!-- /.container -->

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<script>
			function dragStart(e) {
				// Sets the operation allowed for a drag source
				e.dataTransfer.effectAllowed = "move";

				// Sets the value and type of the dragged data
				e.dataTransfer.setData("Text", e.target.getAttribute("id"));
			}

			function dragOver(e) {
				// Prevent the browser default handling of the data
				e.preventDefault();
				e.stopPropagation();
			}

			function drop(e) {
				// Cancel this event for everyone else
				e.stopPropagation();
				e.preventDefault();

				// Retrieve the dragged data by type
				var data = e.dataTransfer.getData("Text");

				// Append image to the drop box
				e.target.appendChild(document.getElementById(data));
			}
			function some()
			{
				alert("hello");
			}
		</script>

	</body>

</html>
