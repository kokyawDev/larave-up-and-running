<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'email'];

    public function phoneNumbers()
    {
        return $this->hasMany(PhoneNumber::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
