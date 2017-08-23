<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User View</title>
</head>
<body>
<h1>User List</h1>
<a href="<?php echo base_url(); ?>index.php/user/add_user_view"> Add User </a>
<table border="1">
	<tr>
		<th>No.</th>
		<th>Username</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach ($records as $r) {
		echo "<tr>";
			echo "<td>".$r->ID."</td>";
			echo "<td>".$r->Username."</td>";
			echo "<td>"."<a href='".base_url()."index.php/user/edit_user_view/".$r->ID."'>Edit</a>"."</td>";
			echo "<td>"."<a href='".base_url()."index.php/user/delete_user/".$r->ID."'>Delete</a>"."</td>";
		echo "</tr>";
	} ?>
</table>

</body>
</html>