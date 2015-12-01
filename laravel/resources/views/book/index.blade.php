<html>
<head >
    <meta charset="utf-8"/>
    <style>
        table,th,tr,td{
            width: 600px;
            text-align: center;
            border:1px solid #009926;
            border-collapse: collapse;
            margin: 0 auto;
            margin-bottom: 20px;

        }
        .aa {
            padding-top:200px ;
         margin-left:480px;
        }
    </style>
</head>

<body>
    <table >
        <tr>
            <th>id</th>
            <th>名字</th>
            <th>价格</th>
            <th>描述</th>

            <th colspan="3">操作</th>

        </tr>
        @foreach($book as $b)
        <tr>
            <td>{{$b->id}}</td>
            <td>{{$b->name}}</td>
            <td>{{$b->age}}</td>
            <td>{{$b->sex}}</td>
            <td><a href="{{$b->id}}">show</a></td>
            <td><a href="delete/{{$b->id}}">delete</a></td>
            <td><a href="edit/{{$b->id}}">edit</a> </td>


        </tr>

    @endforeach

    </table>
    <a href="create" class="aa">创建</a>
</body>
</html>