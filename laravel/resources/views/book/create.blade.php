<html>
<head >
    <meta charset="utf-8"/>
</head>

<body>
    <form action="store" method="POST">
        名字:<input type="text" name="name" /><br>
        价格:<input type="text" name="price" /><br>
        描述:<input type="text" name="desc" /><br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="submit" value="添加"/>
    </form>
</body>
</html>