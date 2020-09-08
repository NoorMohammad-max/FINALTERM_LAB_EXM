<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1>Welcome home!</h1>

	<table border="1">
		<tr>
			<td>EMPLOYEE ID</td>
			<td>COMPANY NAME</td>
			<td>JOB TITLE</td>
			<td>JOB LOCATION</td>
			<td>SALARY<td>
			<td>Action</td>
		</tr>

	
		<tr>
			<td>{{$users[$i]['id']}}</td>
			<td>{{$users[$i]['cname']}}</td>
			<td>{{$users[$i]['jtitle']}}</td>
			<td>{{$users[$i]['jlocation']}}</td>
			<td>{{$users[$i]['salary']}}</td>

			<td>
			    <a href="/home/update/{{$users[$i]['id']}}">Update</a> |
				<a href="/home/delete/{{$users[$i]['id']}}">Delete</a> |
			
			</td>
		</tr>

	</table>

</body>
</html>