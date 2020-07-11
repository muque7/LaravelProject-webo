<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录界面</title>
</head>
<body>
    
    <form action="{{ url('/user/login') }}" method="POST">
    {{ csrf_field() }}
        <table>
            <tr>
                <td>Userid</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>     </td>
                <td><input type="submit" value="Log In"></td>
                
            </tr>
            <tr>
                <td>    </td>
                <td><a href="{{ url('/user/signin') }}">Sign In</a></td>
            </tr>
        </table>
    </form>
</body>
</html>