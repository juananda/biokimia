<!DOCTYPE html>
<html>
<head>
	<title>Upload Form</title>
</head>
<body>
<!-- <form method="" action=""> -->
	<?php
	echo $error;
	echo form_open_multipart('upload/do_upload');
		echo form_input(array('type' => 'file' , 'name' => 'userfile' , 'size' => '20'));
		echo "<br />";
		echo form_submit(array('id' => 'submit' , 'value' => 'Submit'));
	echo form_close();
	?>
<!-- 	<input type="file" name="userfile" size="20" />
	<br /><br />
	<input type="submit" value="upload">
	</form> -->
</body>
</html>