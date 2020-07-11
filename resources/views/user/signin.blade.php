<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册界面</title>
</head>
<body>
   
    <form action="{{ url('/user/signinToDB') }}" method="POST">

        <table>
            <tr>
                {{ csrf_field() }}
                <td>UserName</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>PassWord</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>    </td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>