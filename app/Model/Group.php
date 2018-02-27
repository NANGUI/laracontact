<?php

namespace App\Model;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contacts()
    {
        return $this->belongsToMany(\App\Model\Contact::class, 'group_contact', 'group_id', 'contact_id');
    }
}
