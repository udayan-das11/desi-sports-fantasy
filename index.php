<?php 
# Start the session :
session_start();
if(!isset($_SESSION['username']))
{
	header('Location: login.php');
}



 ?>
<?php 

include ('config/setup.php') ;

?>
<!DOCTYPE html>
<html>
	<head>
		<!-- things that are not visible like css , javascript , metadata  should be put here -->
		<!-- Latest compiled and minified CSS -->
		<title><?php echo $page['title'].' | '.$site_title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php
		
		include('config/css.php');
		
		?>

		<?php
		
		include('config/js.php');
		
		?>

		
	</head>

	<body>
		<?php include (D_TEMPLATE.'/navigation.php'); ?>
		
		<!-- END nav -->
		<div class="container">
			<!-- <h1><?php echo $page['header']; ?> </h1> -->
			<h1>TO DO </h1>
			<!--<?php echo $page['body_formatted']; ?> -->
			
		<!-- Earlier debug was done here . This printed the page array output on the page itself . However then we used jquery debug button hence code shifted to below div 
			console -debug 	<?php if(isset($_GET['debug']) ==1) {?>
			
			<?php } ?> -->
		</div>

		<?php include (D_TEMPLATE.'/footer.php'); ?>
     <!--  <?php if($debug ==1){ include ('widget/debug.php');}?> -->
	</body>
</html>