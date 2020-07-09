<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主页</title>
</head>
<body>
    <span>欢迎来到主页</span>
    <span>用户信息</span>
    <table>
        <tr>
            <td>id</td>
            <td>{{$user->id}}</td>
        </tr>
        <tr>
            <td>username</td>
            <td>{{$user->username}}</td>
        </tr>
    </table>
    <span>用户列表</span>
    <table>
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Password</td>
            <td>Authority</td>
            <td>Option</td>
        </tr>
        @foreach($users as $userl)
        <tr>
            <td>{{ $userl->id }}</td>
            <td>{{ $userl->username }}</td>
            <td>{{ $userl->password }}</td>
            <td>{{ $userl->authority }}</td>
            <td><a href="/user/update/{{ $userl->id }} " name='update'>update</a>|<a href="/user/delete/{{ $userl->id }}" name='delete'>delete</a></td>
        </tr>
        @endforeach
        <tr>
            <td><a href="/user/signin">新增用户</a></td>
            <td><a href="/user/logout">退出登录</a></td>
        </tr>
    </table>
    <style>
        table,tr,td{
            border: 1px solid black;
        }
    </style>
</body>
</html>