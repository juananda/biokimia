<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CodeIgniter View Example</title>
</head>
<body>
<h1>Edit User</h1>
	
	<?php 
	echo form_open('user/edit_user');
		echo form_hidden('id', $records[0]->ID);
		echo form_label('Username');
		echo form_input(array('id' => 'username' , 'name' => 'username' , 'value' => $records[0]->Username));
		echo '<br>';
		echo form_submit(array('id' => 'submit' , 'value' => 'Sumbit'));
	echo form_close(); 
	?>

</body>
</html>