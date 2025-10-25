<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Department Task </title>
</head>
<body>
     <h3> Department Information </h3>

     <ul>
     <li>Name  : {{ $departmentData['title']}} </li>
     <li>Description  : {{ $departmentData['description']}}</li>
     <li>Category  : {{ $departmentData['category']['name'] }}</li>
     </ul>

</body>
</html>