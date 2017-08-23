<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CodeIgniter View Example</title>
</head>
<body>
<h1>Add User</h1>
<!-- 
<form method="POST" action="<?php echo base_url(); ?>index.php/test/add_user">
	<input type="text" name="username">
	<input type="submit" value="Submit">
</form> -->

<!-- <form method="" action=""> -->
	<?php 
	echo form_open('user/add_user');
		echo form_label('Username');
		echo form_input(array('id' => 'username' , 'name' => 'username'));
		echo '<br>';
		echo form_submit(array('id' => 'submit' , 'value' => 'Sumbit'));
	echo form_close(); 
	?>
<!-- </form> -->

</body>
</html>