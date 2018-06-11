<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="add" style="text-decoration:none">
        <button>添加</button>
    </a><br><br>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>contents</th>
            <th>create_time</th>
            <th>update_time</th>
            <th>del/edit</th>
        </tr>
        @foreach($list as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->username}}</td>
                <td>{{$v->contents}}</td>
                <td>{{$v->create_time}}</td>
                <td>{{$v->update_time}}</td>
                <td>
                    <a href="delete?id={{$v->id}}"><button>删除</button></a>
                    <a href="edit?id={{$v->id}}"><button>修改</button></a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>