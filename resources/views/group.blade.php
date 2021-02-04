<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


 @foreach($grup as $pro)
    <h1>
        {{$pro->name}}
    </h1>
    
    @endforeach
</body>
</html>