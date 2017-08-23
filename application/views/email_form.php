<!DOCTYPE html>
<html>
<head>
	<title>Send Email</title>
</head>
<body>
<h1>Send Email</h1>
<?php
	echo $this->session->flashdata('email_sent');
	echo form_open('/email_controller/send_email');
	echo form_input(array('type'=>'email' , 'name'=>'email' , 'required'=>'true'));
	echo form_submit(array('type'=>'submit' , 'value'=>'SEND MAIL'));
	echo form_close();
?>
</body>
</html>