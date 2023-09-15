<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<form method="post" action="{{route('crud.update', ['crudmodel'=> $crudmodel])}}">
        @csrf
        @method('post')

        <label for="">UserName</label>
        <input type="text" name="username" value="{{$crudmodel->username}}">

        <label for="">Phone</label>
        <input type="text" name="phone" value="{{$crudmodel->phone}}">
    
        <label for="">Password</label>
        <input type="password" name="password" value="{{$crudmodel->password}}">

        <input type="submit" value="Save">
    
    </form>
</body>
</html>