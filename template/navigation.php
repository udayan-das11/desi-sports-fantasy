<nav class ="navbar navbar-default" role ="navigation">

	<ul class ="nav navbar-nav">
		<?php // nav_main($dbc, $pageid) ?>

		<!-- <li<?php if($pageid==1) { echo ' class="active"'; } ?>><a href="index.php?page=1">Home</a></li> <!--this will show index.php?page =1 in url -->
		<!--    <li<?php if($pageid==2) {echo ' class="active"';} ?>><a href="?page=2">About Us</a> </li> -->
		<li>
			<a href="#">Dashboard</a>
		</li>
		<li>
			<a href="#">Pages</a>
		</li>
		<li>
			<a href="#">Users</a>
		</li>
		<li>
			<a href="#">Settings</a>
		</li>

	</ul>
<div class ="pull-right">
	<ul class = "nav navbar-nav ">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $user['email']; ?> <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
            <li><a href="logout.php">LogOut</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
		</li>
		
	</ul>
</div>
</nav>