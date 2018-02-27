<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'fullname', 'title', 'function', 'email', 'address', 'user_id', 'birthday', 'phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function groups()
    {
        return $this->belongsToMany(\App\Model\Group::class);
    }
}
