<!DOCTYPE html>
<html>
<head>
	<title>
		Student Add View
	</title>
</head>
<body>
	<h2>Add Students</h2>
	<div>
		<form method="post" action= "{{ URL :: to('insert-employees') }}" >
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
				<input type="submit" name="submit">
			</div>
		</form>
	</div>
</body>
</html>