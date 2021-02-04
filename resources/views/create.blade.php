<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="form-group">
        <input type="text" name="name" placeholder="usergg">
    </div>
</div>
<div class="row">
    <div class="form-group">
        <input type="text" name="email" placeholder="emailgg">
    </div>
</div>
<div class="row">
    <div class="form-group">
        <input type="text" name="password" placeholder="contraseñagg">
    </div>
</div>

<div>
    <button type="submit">mandar</button>
</div>


</form>


</body>
</html>