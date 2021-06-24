<?php

	function printer($arr) {
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
	
	$name = "Munna";

	$students = [
		array("name"=>'Munna', "roll"=>'1057', "mark"=>"82"),
		array("name"=>'Boby', "roll"=>'1058', "mark"=>"83"),
		array("name"=>'Munna', "roll"=>'1057', "mark"=>"82"),
		array("name"=>'Boby', "roll"=>'1058', "mark"=>"83"),
		array("name"=>'Munna', "roll"=>'1057', "mark"=>"82"),
		array("name"=>'Boby', "roll"=>'1058', "mark"=>"83"),
	];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $name; ?> Title</title>
</head>
<body>
	<h1><?php echo $name; ?> Heading</h1>
	<p><?php echo $name; ?> Paragraph</p>

	<table border="1" width="700" align="center" cellpadding="10" cellspacing="0">
		<tr>
			<th>Name</th>
			<th>Roll</th>
			<th>Marks</th>
			<th>Options</th>
		</tr>

	<?php

		foreach ($students as $idx => $student) {
	?>

		<tr>
			<td><?php echo $student['name']; ?></td>
			<td><?php echo $student['roll']; ?></td>
			<td><?php echo $student['mark']; ?></td>
			<td>
				<a href="edit.php?idx=<?php echo $idx; ?>">
					<button>Edit</button>
				</a>
				<a href="delete.php?idx=<?php echo $idx; ?>">
					<button>Delete</button>
				</a>
			</td>
		</tr>

	<?php } ?>

	</table>

</body>
</html>