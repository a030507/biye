<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        name
        <input type="name" name="name" value="{{ old('name') }}">
    </div>

    <div>
        密码
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> 记住我
    </div>

    <div>
        <button type="submit">登录</button>
    </div>
</form>