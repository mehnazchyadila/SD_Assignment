<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
</head>
<body>
	<h2>
		Add Students
	</h2>
	<form method="post" action="{{ URL::to('store-student')}}">
			{{ csrf_field() }}
			<div>
				<label>Name</label>
				<input type="text" name="name">
			</div>
			<div>
				<label>Email</label>
				<input type="email" name="email">
			</div>
			<div>
				<label>DOB</label>
				<input type="date" name="dob">
			</div>
			<div>
				<input type="submit" value="Submit" name="submit">
			</div>
		</form>
</body>
</html>