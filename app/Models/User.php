<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public $table ='user';

    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'authority'
    ];
    
    /**
     * 获取用户的头像
     *
     * @param string $size
     *
     * @return void
     */
    public function gravatar($size = '100')
    {
        $hash = md5(strtolower(trim($this->attributes['id'])));
        return "http://www.gravatar.com/avatar/$hash?s=$size";
    }
}
