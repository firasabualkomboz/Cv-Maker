<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' , 'overview' , 'street' , 'city',
        'from' , 'telephone' , 'mobile' , 'email','avatar' ,'user_id'

    ];
    public function getAvatarUrlAttribute()
    {
        return asset('uploads/' . $this->avatar);
    }

    public function user(){

    return $this->belongsTo(Personal::class);

    }

}
