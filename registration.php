<!DOCTYPE html>
<html>
	<head>
		<title>Registration Page</title>
	</head>
	<?php
		if(isset($_POST['btnsubmit']))
		{
			if($_POST['txtname']=="" || $_POST['txtmno'])
			{
				echo "<script>alert('Please enter required fields!');</script>";
			}
			else
			{
				//Database insertion code
			}
		}
	?>
	<body>
		<form method="post">
			Name:
			<input type="text" name="txtname"/><br/>
			Mobile No.:
			<input type="tel" name="txtmno"/><br/>
			<input type="submit" name="btnsubmit" value="submit"/>
		</form>
	</body>
</html>
