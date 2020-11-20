<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
<h2>Edit Student</h2>
	<div>
		<form method="post" action= "{{ URL::to('update-student/'.$student->id) }}">
			{{ csrf_field() }}
			<div>
				<label>Name</label>
				<input type="text" value="{{ $student->name}}" name="name">
			</div>
			<div>
				<label>Email</label>
				<input type="email" value="{{ $student->email}}" name="email">
			</div>
			<div>
				<label>DOB</label>
				<input type="date" value="{{ $student->dob}}" name="dob">
			</div>
			<div>
				<input type="submit" name="submit" value="Update">
			</div>
		</form>
	</div>
</body>
</html>