<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusMd extends Model
{
    public $table ='status';
    public $primaryKey = 'id';

    protected $fillable = ['content'];
    public function user()
    {
        return $this->belongsTo(UserMd::class,'user_id','id');
    }
}
