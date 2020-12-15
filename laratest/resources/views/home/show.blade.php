<!DOCTYPE html>
<html>
<head>
	<title>Show Users</title>
</head>
<body>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

	<br>
		<table border="1">
			<tr>
				<td>Name</td>
				<td>{{$name}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{$email}}</td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td>{{$cgpa}}</td>
			</tr>
			<tr>
				<td>Image</td>
				<td><img src="{{asset('upload/'.$img)}}" width="100px" height="100px"></td>
			</tr>
		</table>
</body>
</html>