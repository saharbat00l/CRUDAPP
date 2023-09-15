<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
<form method="post" action="{{route('crud.store')}}">
        @csrf
        @method('post')

        <label for="">UserName</label>
        <input type="text" name="username">

        <label for="">Phone</label>
        <input type="text" name="phone">
    
        <label for="">Password</label>
        <input type="password" name="password">

        <input type="submit" value="Save">
    
    </form>
    
</body>
</html>