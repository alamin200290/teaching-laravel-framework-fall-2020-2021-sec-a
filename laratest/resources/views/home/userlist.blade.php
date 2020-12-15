<!DOCTYPE html>
<html>
<head>
	<title>User list page</title>
</head>
<body>

	<h3>All User</h3>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>USERNAME</td>
			<td>CGPA</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($users); $i++)
		<tr>
			<td>{{$users[$i]['userId']}}</td>
			<td>{{$users[$i]['name']}}</td>
			<td>{{$users[$i]['username']}}</td>
			<td>{{$users[$i]['cgpa']}}</td>
			<td>
				<a href="/details/{{$users[$i]['userId']}}">Details</a> |
				<a href="{{route('home.edit', $users[$i]['userId'])}}">Edit</a> |
				<a href="/delete/{{$users[$i]['userId']}}">Delete</a> 
			</td>
		</tr>
		@endfor
	</table>

</body>
</html>