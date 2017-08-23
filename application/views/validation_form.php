<!DOCTYPE html>
<html>
<head>
	<title>Validation Form</title>
</head>
<body>
<h1>Test Validation Form</h1>

<?php 
echo validation_errors(); 
echo form_open('form');
echo form_label('Name : ');
echo form_input(array('type'=>'text' , 'name'=>'name' , 'size'=>'30'));
echo '<br>';
echo form_label('Email : ');
echo form_input(array('type'=>'text' , 'name'=>'email' , 'size'=>'30'));
echo '<br>';
echo form_submit(array('id'=>'submit' , 'value'=>'Submit'));
echo form_close();

?>

</body>
</html>