<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /***************************************************************************新的开始 *************************************************************************************/
    /**
     * 用户登录
     *
     */
    public function login(Request $request)
    {
        session()->forget('user');
        $user = DB::table('user')->where([
            ['id', $request['id']],
            ['password', md5($request['password'])],
        ])->get()->all();

        if (!empty($user)) {
            session(['user' => $user[0]]);
            return $this->toHome();
        } else {
            return back();
        }
    }

    /**
     * 用户注册
     */
    public function signinToDB(Request $request)
    {
        $res = DB::table('user')->insertGetId(['username' => $request['username'], 'password' => md5($request['password'])]);
        $user = DB::table('user')->where([
            ['id', $res],
        ])->get()->all();  

        if (!empty($user)) {
            if (!session()->has('user')) {
                session(['user' => $user[0]]);
            }
            return $this->toHome();
        } else {
            return back();
        }

    }

    /**
     * 前往首页
     */
    public function toHome()
    {
        
        $user = session('user');
        info(var_export($user,true));

        $users = DB::table('user')->where('authority', '<', $user->authority)->orWhere('id', $user->id)->get();
        return view('user/home', ['user' => $user, 'users' => $users]);
    }

    /**
     * 删除用户
     *
     */
    public function delete($id)
    {
        DB::table('user')->where('id', $id)->delete();
        return $this->toHome();
    }

    /**
     * 前往用户更改页
     *
     * @return void
     */
    public function update($id)
    {
        $user = User::find($id);
        return view('user.update', compact('user'));
    }

    /**
     * 执行用户更新
     *
     */
    public function updateA(Request $request)
    {
        $user = session('user');
        if ($user->authority > $request['authority'] || $user->id == $request['id']) {
            DB::table('user')->where('id', $request['id'])->update(['username' => $request['username'], 'password' => md5($request['password']), 'authority' => $request['authority']]);
            return $this->toHome();
        } else {
            return back();
        }
    }

    /**
     * 用户退出
     * 
     */
    public function logout()
    {
        session()->forget('user');
        return view('user.login');
    }
}
