<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h2>Employees</h2>
    <table>
    <thead>
    <th>Name</th>
    <th>Email</th>
    <th>DOB</th>
    </thead>
    <tbody>
    @foreach($employees as $e)
    <tr>
    <td>{{ $e->name }}</td>
    <td>{{ $e->email }}</td>
    <td>{{ $e->dob }}</td>
    
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
</body>
</html>