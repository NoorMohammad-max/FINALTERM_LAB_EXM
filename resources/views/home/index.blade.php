<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1>Welcome home!</h1>


	<h2>EMPLOYEE list</h2>

	<table border="1">
		<tr>
			<td>EMPLOYER ID</td>
			<td>EMPLOYER NAME</td>
			<td>CONTACT NO</td>
			<td>USER NAME</td>
			<td>PASSWORD<td>
			<td>Action</td>
		</tr>

	
		<tr>
			<td>{{$users[$i]['id']}}</td>
			<td>{{$users[$i]['name']}}</td>
			<td>{{$users[$i]['contact']}}</td>
			<td>{{$users[$i]['uname']}}</td>
			<td>{{$users[$i]['password']}}</td>

			<td>
				<a href="/home/edit/{{$users[$i]['id']}}">Edit</a> |
				<a href="/home/delete/{{$users[$i]['id']}}">Delete</a> |
			
			</td>
		</tr>

	</table>

</body>
</html>