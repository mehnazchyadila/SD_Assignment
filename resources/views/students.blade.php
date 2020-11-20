<!DOCTYPE html>
<html>
<head>
	<title>Students View</title>
</head>
<body>
 	<h2>Students Details</h2>
 	<a style="color: black" href="{{ URL::to('add-student') }}">Add Students</a>
 	<table border="1">
 		<thead>
 			<th>Name</th>
 			<th>Email</th>
 			<th>DOB</th>
 			<th>Edit</th>
 		</thead>
 		<tbody>
 			@foreach($all as $s)
 			<tr>
 				<td>{{ $s -> name }}</td>
 				<td>{{ $s -> email }}</td>
 				<td>{{ $s -> dob }}</td>
 				<td><a href="{{ URL::to('edit-student/'.$s->id )}}">Edit</a></td>
 			</tr>
 			@endforeach
 		</tbody>
 	</table> 	
</body>
</html>