<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户修改页面</title>
</head>
<body>
    <form action="{{ url('/user/updateA') }}" method="POST">
        <table>
            <tr>
                <td>id</td>
                <td>{{ $user->id}}</td>
                <input type="hidden" name="id" value={{ $user->id}}>
            </tr>
            <tr>
                {{ csrf_field() }}
                <td>UserName</td>
                <td><input type="text" name="username" value={{ $user->username}}></td>
            </tr>
            <tr>
                <td>PassWord</td>
                <td><input type="password" name="password" value={{ $user->password}}></td>
            </tr>
            <tr>
                <td>Authority</td>
                <td><input type="text" name="authority" value={{ $user->authority}}></td>
            </tr>
            <tr>
                <td>    </td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>