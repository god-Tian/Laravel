<style>
    p{
        margin-bottom: 40px;
    }
</style>
<form action="editsave" method="post">
    <input type="hidden" name="_token" value="{{CSRF_token()}}"/>
    <input type="hidden" name="id" value="{{$list->id}}">
    <input type="hidden" name="create_time" value="{{$list->create_time}}">
    <p>用户名：<input type="text" name="username" value="{{$list->username}}"></p>
    <p>评论：<textarea name="contents" id="" cols="30" rows="10">{{$list->contents}}</textarea></p>
    <p><input type="submit" value="修改"></p>
</form>