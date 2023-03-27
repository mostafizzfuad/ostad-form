<!DOCTYPE html>
<html>
<head>
	<title>Table Example</title>
</head>
<body>
	<h2>Table</h2>
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Age</th>
		</tr>
		<tr>
			<td>John</td>
			<td>25</td>
		</tr>
		<tr>
			<td>Sarah</td>
			<td>30</td>
		</tr>
		<tr>
			<td>Mike</td>
			<td>28</td>
		</tr>
	</table>

	<h2>Add New Row</h2>
	<form onsubmit="addRow(); return false;">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>
		<label for="age">Age:</label>
		<input type="number" id="age" name="age" required>
		<input type="submit" value="Submit">
	</form>

	<script>
		function addRow() {
			// Get form input values
			var name = document.getElementById("name").value;
			var age = document.getElementById("age").value;

			// Create new row in the table
			var table = document.getElementsByTagName("table")[0];
			var newRow = table.insertRow(table.rows.length);
			var nameCell = newRow.insertCell(0);
			var ageCell = newRow.insertCell(1);
			nameCell.innerHTML = name;
			ageCell.innerHTML = age;

			// Reset form input values
			document.getElementById("name").value = "";
			document.getElementById("age").value = "";
		}
	</script>
</body>
</html>
