<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title>Simple Login with CodeIgniter - Private Area</title>
	</head>
	<body>
	<h1>Home</h1>
	
	<h2>Welcome <?php echo $username; ?>!</h2>
	<a href="home/logout">Logout</a>
	<div class="container">
		<div class="row-fluid weel">
			<div class="span6">
				<?php echo validation_errors(); ?>
				<?php echo form_open('posts'); ?>
				<input type="text" name="post" placeholder="insert text here">
				<input type="hidden" name="user" value="<?php echo $username;?>">
				<input type="submit" value="Inserisci Post">
			</div>
			<div class="span6">
		
			Post Pubblicati: 
				<? foreach($posts as $row)
					echo $row;
				?>
			</div>
		</div>
	</div>
		
	</body>
</html>