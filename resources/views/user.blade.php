<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <a href=" {{ route('create.product')  }} ">
        Crear
    </a>
</div>

 @foreach($product as $pro)
    <h1>
        {{$pro->name}}
    </h1>
    <h1>
        {{$pro->email}}
    </h1>
    @endforeach
</body>
</html>