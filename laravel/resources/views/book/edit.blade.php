<html>
<head >
    <meta charset="utf-8"/>
</head>

<body>
    <form action="update/{{$book->id}}">
        id:{{$book->id}}<br>
        名字:<input type="text" name="name" value="{{$book->name}}"/><br>
        价格:<input type="text" name="price" value="{{$book->price}}"/><br>
        描述:<input type="text" name="desc" value="{{$book->desc}}"/><br>
        <input type="submit" value="修改"/>
    </form>
</body>
</html>