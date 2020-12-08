<!DOCTYPE html>
<html>
<head>
	<title>Create New User</title>
</head>
<body>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>
	<form method="post">
		{{csrf_field()}}
		<fieldset>
			<legend>Ceate New User</legend>
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{old('name')}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="{{old('email')}}"></td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td><input type="text" name="cgpa" value="{{old('cgpa')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="create" value="Create"></td>
			</tr>
		</table>
		</fieldset>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</body>
</html>