<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{route("admin.logined")}}" method="post">
        账号：<input type="text" name="username">
        密码：<input type="password" name="password">
        <input type="hidden" name="token2" value="thisisatoken">
        <input type="submit" value="提交">
    </form>
    <iframe name="form" id="form" style="display:none"></iframe>
</body>
</html>
