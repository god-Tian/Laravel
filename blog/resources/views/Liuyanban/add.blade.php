<style>
    p{
        margin-bottom: 40px;
    }
</style>
<form action="addsave" method="post">
    <input type="hidden" name="_token" value="{{CSRF_token()}}"/>
    <p>用户名：<input type="text" name="username"></p>
    <p>评论：<textarea name="contents" id="" cols="30" rows="10"></textarea></p>
    <p><input type="submit" value="添加"></p>
</form>