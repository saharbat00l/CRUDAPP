<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body style="background-color:grey; color:black;">
    <h1>Indexing..!</h1>
    <a href="{{route('crud.add')}}">Add User</a>

    <table>

<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Username</th>
    <th scope="col">Phone</th>
    <th scope="col">Password</th>
    <th scope="col">Actions</th>
  </tr>
</thead>

<tbody>

@foreach($users as $user)
 <tr>
  <td>{{ $user ->id }}</td>
  <td>{{ $user ->username }}</td>
  <td>{{ $user ->phone }}</td>
  <td>{{ $user ->password }}</td>
  <td>
      <a href="">Edit</a></td>

  <td>
    
    </td>
 </tr>
 @endforeach

</tbody>

</table>

</body>
</html>