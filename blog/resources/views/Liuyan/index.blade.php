<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#btn').click(function (){
                var data = $('#data-form').serializeArray();
                console.log(data);
                $.post("addsave", data, function (r){
                    console.log(r);
                    window.location.reload();
                })
            })
        })
    </script>
</head>
<body>
    <form action="" method="post" onsubmit="return false" id="data-form">
        <input type="hidden" name="_token" value="{{CSRF_token()}}">
        留言：<textarea name="contents" id="" cols="30" rows="10"></textarea>
        <p><input type="submit" value="发布" id="btn"></p>
    </form>
    @foreach($list as $v)
        <div>
            <p>用户：
                {{$v->username}}
            </p>
            <p>评论：
                {{$v->contents}}
                <a href="delete?id={{$v->id}}">
                    <button>删除</button>
                </a>
            </p>
        </div>
    @endforeach
    {{ $list->links() }}
</body>
</html>