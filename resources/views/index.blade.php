<!DOCTYPE html>
<html>
<head>
	<title>Programming Test</title>
</head>
<body>

	
	<h3>Data employee</h3>

	<a href="/employees/add"> + Add</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Username</th>
			<th>Fullname</th>
			<th>NIK</th>
			<th>Email</th>
            <th>Opsi</th>
		</tr>
		@foreach($employees as $m)
		<tr>
			<td>{{ $m->username }}</td>
			<td>{{ $m->fullname }}</td>
			<td>{{ $m->nik }}</td>
            <td>{{ $m->email }}</td>
			<td>
				<a href="/employees/edit/{{ $m->id }}">Edit</a>
				|
				<a href="/employees/delete/{{ $m->id }}">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>