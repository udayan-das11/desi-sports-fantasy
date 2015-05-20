<!DOCTYPE html>
<?php 

include ('config/setup.php') ;

?>
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
		<div class="container">
			<p class="lead">
				My Team
			</p>
		</div>
		<div class="container">

			<div id="img_cont">
	<?php
			$myPlayers = explode(";", $user["user_team"]);
			foreach ($myPlayers as &$value) {
			$myQuery ="SELECT * FROM players where ID=".$value;
			$myRow = mysqli_query($dbc, $myQuery);
			$myPlayerData= mysqli_fetch_assoc($myRow);
        	echo "<img src=\"images/".$value.".png\">";
    		}            
			?>  

			</div>
		</div>
		<p>
			</div>
			<div class="container">
				<div class="row">
					<div class="text-right">
						<a class="btn btn-success">Change Players</a>
					</div>
				</div>
				<p>
					<!-- Page Content -->
					<div class="container">

						<div class="row">

							<div class="col-md-6">
								<div class="thumbnail">
									<div class="caption-full">

										<h4><a href="#">Bet in Leagues</a></h4>
										<div class="col-md-6">
											<p>
												Open Leagues
											</p>
											<a href="#" class="list-group-item active">Category 1</a>
											<a href="#" class="list-group-item">Category 2</a>
											<a href="#" class="list-group-item">Category 3</a>
										</div>
										<div class="col-md-6">
											<p>
												Personal Leagues
											</p>
											<a href="#" class="list-group-item active">Category 1</a>
											<a href="#" class="list-group-item">Category 2</a>
											<a href="#" class="list-group-item">Category 3</a>
										</div>
									</div>
									<div class="ratings">
										<p class="pull-right">
											#Number
										</p>
										<p>
											Total Leagues

										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="thumbnail">
									<div class="caption-full">

										<h4><a href="#">Bet in Leagues</a></h4>
										<div class="col-md-6">
											<p>
												Open Leagues
											</p>
											<a href="#" class="list-group-item active">Category 1</a>
											<a href="#" class="list-group-item">Category 2</a>
											<a href="#" class="list-group-item">Category 3</a>
										</div>
										<div class="col-md-6">
											<p>
												Personal Leagues
											</p>
											<a href="#" class="list-group-item active">Category 1</a>
											<a href="#" class="list-group-item">Category 2</a>
											<a href="#" class="list-group-item">Category 3</a>
										</div>
									</div>
									<div class="ratings">
										<p class="pull-right">
											#Number
										</p>
										<p>
											Total Leagues

										</p>
									</div>
								</div>
							</div>

						</div>
						<table class="table table-hover">
							<caption>
								Hover Table Layout
							</caption>
							<thead>
								<tr>
									<th>Name</th>
									<th>City</th>
									<th>Pincode</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Tanmay</td>
									<td>Bangalore</td>
									<td>560001</td>
								</tr>
								<tr>
									<td>Sachin</td>
									<td>Mumbai</td>
									<td>400003</td>
								</tr>
								<tr>
									<td>Uma</td>
									<td>Pune</td>
									<td>411027</td>
								</tr>
							</tbody>
						</table>
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

	</body>

</html>
